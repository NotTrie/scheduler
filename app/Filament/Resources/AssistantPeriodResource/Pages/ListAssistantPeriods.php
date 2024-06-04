<?php

namespace App\Filament\Resources\AssistantPeriodResource\Pages;

use App\Models\AssistantPeriod;
use App\Filament\Resources\AssistantPeriodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
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

    public function generateAssistants()
    {
        // Get all schedules
        $schedules = DB::table('schedules')->get();
        
        foreach ($schedules as $schedule) {
            // Get the session and room details
            $period_id = $schedule->period_id;
            $room_id = $schedule->room_id;
            $room_slot = DB::table('rooms')->where('id', $room_id)->value('slot');

            // Get available assistants for the session
            $available_assistants = DB::table('availabilities')
                ->where('period_id', $period_id)
                ->where('is_available', true)
                ->pluck('assistant_id')
                ->toArray();

            // Run genetic algorithm to select assistants
            $selected_assistants = $this->runGeneticAlgorithm($available_assistants, $room_slot);

            // Insert into assistant_session
            foreach ($selected_assistants as $assistant_id) {
                AssistantPeriod::create([
                    'period_id' => $schedule->id,
                    'assistant_id' => $assistant_id,
                    'slot_used' => 1,
                ]);
            }
        }

        session()->flash('success', 'Generation complete.');
    }

    private function runGeneticAlgorithm($available_assistants, $room_slot)
    {
        // Simple genetic algorithm implementation
        // For demonstration, we'll randomly select assistants
        if (count($available_assistants) <= $room_slot) {
            return $available_assistants;
        }

        // Initial population (random selection)
        $population = [];
        for ($i = 0; $i < 100; $i++) {
            shuffle($available_assistants);
            $population[] = array_slice($available_assistants, 0, $room_slot);
        }

        // Fitness function: unique set of assistants
        $fitness = function($individual) {
            return count(array_unique($individual));
        };

        // Evolution process
        for ($generation = 0; $generation < 100; $generation++) {
            usort($population, function($a, $b) use ($fitness) {
                return $fitness($b) <=> $fitness($a);
            });

            // Selection (top 50%)
            $population = array_slice($population, 0, 50);

            // Crossover
            for ($i = 0; $i < 50; $i += 2) {
                if ($i + 1 >= count($population)) break;
                $parent1 = $population[$i];
                $parent2 = $population[$i + 1];
                $cross_point = rand(1, $room_slot - 1);
                $child1 = array_merge(array_slice($parent1, 0, $cross_point), array_slice($parent2, $cross_point));
                $child2 = array_merge(array_slice($parent2, 0, $cross_point), array_slice($parent1, $cross_point));
                $population[] = $child1;
                $population[] = $child2;
            }

            // Mutation
            foreach ($population as &$individual) {
                if (rand(0, 100) < 1) { // 1% chance of mutation
                    $mutate_point = rand(0, $room_slot - 1);
                    $individual[$mutate_point] = $available_assistants[array_rand($available_assistants)];
                }
            }
        }

        // Return the best solution
        return $population[0];
    }
}
