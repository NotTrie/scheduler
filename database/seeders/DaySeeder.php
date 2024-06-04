<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Day::insert([
            ['code' => 'MON', 'name' => 'Monday'],
            ['code' => 'TUE', 'name' => 'Tuesday'],
            ['code' => 'WED', 'name' => 'Wednesday'],
            ['code' => 'THU', 'name' => 'Thursday'],
            ['code' => 'FRI', 'name' => 'Friday'],
            ['code' => 'SAT', 'name' => 'Saturday'],
        ]);
    }
}
