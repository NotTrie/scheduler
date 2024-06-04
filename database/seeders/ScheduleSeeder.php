<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::insert([
            ['period_id' => 1, 'room_id' => 1],
            ['period_id' => 1, 'room_id' => 3],
            ['period_id' => 3, 'room_id' => 1],
            ['period_id' => 3, 'room_id' => 2],
            ['period_id' => 3, 'room_id' => 3],
            ['period_id' => 4, 'room_id' => 1],
            ['period_id' => 4, 'room_id' => 2],
            ['period_id' => 4, 'room_id' => 3],
            ['period_id' => 5, 'room_id' => 1],
            ['period_id' => 5, 'room_id' => 2],
            ['period_id' => 5, 'room_id' => 3],
            ['period_id' => 5, 'room_id' => 4],
            ['period_id' => 6, 'room_id' => 1],
            ['period_id' => 6, 'room_id' => 2],
            ['period_id' => 6, 'room_id' => 3],
            ['period_id' => 6, 'room_id' => 4],
            ['period_id' => 7, 'room_id' => 1],
            ['period_id' => 8, 'room_id' => 1],
            ['period_id' => 8, 'room_id' => 4],
            ['period_id' => 9, 'room_id' => 2],
            ['period_id' => 9, 'room_id' => 3],
        ]);
    }
}
