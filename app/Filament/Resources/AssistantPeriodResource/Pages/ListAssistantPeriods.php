<?php

namespace App\Filament\Resources\AssistantPeriodResource\Pages;

use App\Models\AssistantPeriod;
use App\Filament\Resources\AssistantPeriodResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ListAssistantPeriods extends ListRecords
{
    protected static string $resource = AssistantPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('Generate')
                ->label('Generate')
                ->action('generateAssistants')
                ->color('success')
                ->icon('heroicon-o-cog'),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return AssistantPeriod::select('assistant_periods.*')
            ->join('periods', 'assistant_periods.period_id', '=', 'periods.id')
            ->groupBy('periods.code');
    }

    public function generateAssistants()
    {
        // Get all schedules
        $schedules = DB::table('schedules')->get();

        foreach ($schedules as $schedule) {
            // Get the session and room details
            $period_id = $schedule->period_id;
            $room_id = $schedule->room_id;
            $room_slot = DB::table('rooms')->where('id', $room_id)->value('slot');
            $course_skill_id = $schedule->skill_id; // Assuming each schedule has a required skill id

            // Get available assistants for the session
            $available_assistants = DB::table('availabilities')
                ->where('period_id', $period_id)
                ->where('is_available', true)
                ->pluck('assistant_id')
                ->toArray();

            $selected_assistants = $this->runGeneticAlgorithm($available_assistants, $room_slot, $course_skill_id);

            foreach ($selected_assistants as $assistant_id) {
                $is_assigned_same_period = DB::table('assistant_periods')
                    ->where('assistant_id', $assistant_id)
                    ->where('period_id', $period_id)
                    ->exists();

                if ($is_assigned_same_period) {
                    $existing_room_id = DB::table('assistant_periods')
                        ->where('assistant_id', $assistant_id)
                        ->where('period_id', $period_id)
                        ->value('room_id');

                    if ($existing_room_id != $room_id) {
                        continue;
                    }
                }

                DB::table('assistant_periods')->insert([
                    'assistant_id' => $assistant_id,
                    'period_id' => $period_id,
                    'room_id' => $room_id,
                    'slot_used' => 1,
                ]);
            }
        }

        Notification::make()
            ->title('Assistant Generated Successfully')
            ->success()
            ->duration(5000)
            ->send();
    }

    private function runGeneticAlgorithm($available_assistants, $room_slot, $course_skill_id)
    {
        if (count($available_assistants) <= $room_slot) {
            return array_slice($available_assistants, 0, $room_slot);
        }

        // Initial population (random selection)
        $population = [];
        for ($i = 0; $i < 100; $i++) {
            shuffle($available_assistants);
            $population[] = array_slice($available_assistants, 0, $room_slot);
        }

        // Fitness function: compatibility with course skills
        $fitness = function($individual) use ($course_skill_id) {
            return $this->calculateFitness($individual, $course_skill_id);
        };

        // Evolution process
        for ($generation = 0; $generation < 100; $generation++) {
            // Selection (e.g., tournament selection)
            usort($population, function($a, $b) use ($fitness) {
                return $fitness($b) <=> $fitness($a);
            });
            $population = array_slice($population, 0, 50);  // top 50% selected

            // Crossover
            $new_population = [];
            for ($i = 0; $i < 50; $i += 2) {
                if ($i + 1 >= count($population)) break;
                $parent1 = $population[$i];
                $parent2 = $population[$i + 1];
                $cross_point = rand(1, $room_slot - 1);
                $child1 = array_merge(array_slice($parent1, 0, $cross_point), array_slice($parent2, $cross_point));
                $child2 = array_merge(array_slice($parent2, 0, $cross_point), array_slice($parent1, $cross_point));

                // Remove duplicates in children
                $child1 = array_unique($child1);
                $child2 = array_unique($child2);

                // Ensure the length of children matches the room slot
                while (count($child1) < $room_slot) {
                    $child1[] = $available_assistants[array_rand($available_assistants)];
                    $child1 = array_unique($child1);
                }
                while (count($child2) < $room_slot) {
                    $child2[] = $available_assistants[array_rand($available_assistants)];
                    $child2 = array_unique($child2);
                }

                $new_population[] = $child1;
                $new_population[] = $child2;
            }

            // Mutation with more effective method
            foreach ($new_population as &$individual) {
                if (rand(0, 100) < 5) { // 5% chance of mutation
                    $mutate_point = rand(0, $room_slot - 1);
                    $individual[$mutate_point] = $available_assistants[array_rand($available_assistants)];
                }
                $individual = array_unique($individual);

                // Ensure the length of individual matches the room slot after mutation
                while (count($individual) < $room_slot) {
                    $individual[] = $available_assistants[array_rand($available_assistants)];
                    $individual = array_unique($individual);
                }
            }

            $population = $new_population;
        }

        // Return the best solution without duplicates
        usort($population, function($a, $b) use ($fitness) {
            return $fitness($b) <=> $fitness($a);
        });

        return array_slice($population[0], 0, $room_slot);
    }


    private function calculateFitness($individual, $course_skill_id)
    {
        $fitness = 0;
        foreach ($individual as $assistant_id) {
            $proficiency = DB::table('assistant_skills')
                ->where('assistant_id', $assistant_id)
                ->where('skill_id', $course_skill_id)
                ->value('proficiency_level');
            $fitness += $proficiency ? $proficiency : 0;
        }
        return $fitness;
    }

}
