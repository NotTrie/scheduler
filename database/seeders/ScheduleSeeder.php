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
            //Monday
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

            //Tuesday
            ['period_id' => 10, 'room_id' => 2],
            ['period_id' => 10, 'room_id' => 3],
            ['period_id' => 11, 'room_id' => 1],
            ['period_id' => 11, 'room_id' => 2],
            ['period_id' => 11, 'room_id' => 3],
            ['period_id' => 12, 'room_id' => 1],
            ['period_id' => 12, 'room_id' => 2],
            ['period_id' => 12, 'room_id' => 3],
            ['period_id' => 13, 'room_id' => 1],
            ['period_id' => 13, 'room_id' => 2],
            ['period_id' => 13, 'room_id' => 3],
            ['period_id' => 14, 'room_id' => 1],
            ['period_id' => 14, 'room_id' => 2],
            ['period_id' => 14, 'room_id' => 3],
            ['period_id' => 15, 'room_id' => 1],
            ['period_id' => 17, 'room_id' => 1],
            ['period_id' => 18, 'room_id' => 1],
            ['period_id' => 18, 'room_id' => 3],
            ['period_id' => 18, 'room_id' => 4],

            //Wednesday
            ['period_id' => 19, 'room_id' => 1],
            ['period_id' => 19, 'room_id' => 3],
            ['period_id' => 20, 'room_id' => 2],
            ['period_id' => 21, 'room_id' => 2],
            ['period_id' => 22, 'room_id' => 1],
            ['period_id' => 22, 'room_id' => 2],
            ['period_id' => 22, 'room_id' => 3],
            ['period_id' => 23, 'room_id' => 1],
            ['period_id' => 23, 'room_id' => 2],
            ['period_id' => 23, 'room_id' => 3],
            ['period_id' => 24, 'room_id' => 1],
            ['period_id' => 25, 'room_id' => 3],
            ['period_id' => 26, 'room_id' => 3],
            ['period_id' => 26, 'room_id' => 4],
            ['period_id' => 27, 'room_id' => 1],
            ['period_id' => 27, 'room_id' => 2],
            ['period_id' => 27, 'room_id' => 3],

            //Thursday
            ['period_id' => 28, 'room_id' => 2],
            ['period_id' => 30, 'room_id' => 1],
            ['period_id' => 30, 'room_id' => 3],
            ['period_id' => 31, 'room_id' => 1],
            ['period_id' => 31, 'room_id' => 3],
            ['period_id' => 32, 'room_id' => 1],
            ['period_id' => 32, 'room_id' => 2],
            ['period_id' => 32, 'room_id' => 3],
            ['period_id' => 33, 'room_id' => 1],
            ['period_id' => 33, 'room_id' => 2],
            ['period_id' => 33, 'room_id' => 3],
            ['period_id' => 34, 'room_id' => 3],
            ['period_id' => 35, 'room_id' => 2],
            ['period_id' => 35, 'room_id' => 3],
            ['period_id' => 36, 'room_id' => 2],
            ['period_id' => 36, 'room_id' => 3],
        ]);
    }
}
