<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Period::insert([
            ['code' => 'MON1', 'day_id' => 1, 'start' => '08:00', 'end' => '09:30'],
            ['code' => 'MON2', 'day_id' => 1, 'start' => '09:30', 'end' => '11:00'],
            ['code' => 'MON3', 'day_id' => 1, 'start' => '11:00', 'end' => '12:30'],
            ['code' => 'MON4', 'day_id' => 1, 'start' => '12:30', 'end' => '14:00'],
            ['code' => 'MON5', 'day_id' => 1, 'start' => '14:00', 'end' => '15:30'],
            ['code' => 'MON6', 'day_id' => 1, 'start' => '15:30', 'end' => '17:00'],
            ['code' => 'MON7', 'day_id' => 1, 'start' => '17:00', 'end' => '18:30'],
            ['code' => 'MON8', 'day_id' => 1, 'start' => '19:00', 'end' => '20:30'],
            ['code' => 'MON9', 'day_id' => 1, 'start' => '20:30', 'end' => '22:00'],
            ['code' => 'TUE1', 'day_id' => 2, 'start' => '08:00', 'end' => '09:30'],
            ['code' => 'TUE2', 'day_id' => 2, 'start' => '09:30', 'end' => '11:00'],
            ['code' => 'TUE3', 'day_id' => 2, 'start' => '11:00', 'end' => '12:30'],
            ['code' => 'TUE4', 'day_id' => 2, 'start' => '12:30', 'end' => '14:00'],
            ['code' => 'TUE5', 'day_id' => 2, 'start' => '14:00', 'end' => '15:30'],
            ['code' => 'TUE6', 'day_id' => 2, 'start' => '15:30', 'end' => '17:00'],
            ['code' => 'TUE7', 'day_id' => 2, 'start' => '17:00', 'end' => '18:30'],
            ['code' => 'TUE8', 'day_id' => 2, 'start' => '19:00', 'end' => '20:30'],
            ['code' => 'TUE9', 'day_id' => 2, 'start' => '20:30', 'end' => '22:00'],
            ['code' => 'WED1', 'day_id' => 3, 'start' => '08:00', 'end' => '09:30'],
            ['code' => 'WED2', 'day_id' => 3, 'start' => '09:30', 'end' => '11:00'],
            ['code' => 'WED3', 'day_id' => 3, 'start' => '11:00', 'end' => '12:30'],
            ['code' => 'WED4', 'day_id' => 3, 'start' => '12:30', 'end' => '14:00'],
            ['code' => 'WED5', 'day_id' => 3, 'start' => '14:00', 'end' => '15:30'],
            ['code' => 'WED6', 'day_id' => 3, 'start' => '15:30', 'end' => '17:00'],
            ['code' => 'WED7', 'day_id' => 3, 'start' => '17:00', 'end' => '18:30'],
            ['code' => 'WED8', 'day_id' => 3, 'start' => '19:00', 'end' => '20:30'],
            ['code' => 'WED9', 'day_id' => 3, 'start' => '20:30', 'end' => '22:00'],
            ['code' => 'THU1', 'day_id' => 4, 'start' => '08:00', 'end' => '09:30'],
            ['code' => 'THU2', 'day_id' => 4, 'start' => '09:30', 'end' => '11:00'],
            ['code' => 'THU3', 'day_id' => 4, 'start' => '11:00', 'end' => '12:30'],
            ['code' => 'THU4', 'day_id' => 4, 'start' => '12:30', 'end' => '14:00'],
            ['code' => 'THU5', 'day_id' => 4, 'start' => '14:00', 'end' => '15:30'],
            ['code' => 'THU6', 'day_id' => 4, 'start' => '15:30', 'end' => '17:00'],
            ['code' => 'THU7', 'day_id' => 4, 'start' => '17:00', 'end' => '18:30'],
            ['code' => 'THU8', 'day_id' => 4, 'start' => '19:00', 'end' => '20:30'],
            ['code' => 'THU9', 'day_id' => 4, 'start' => '20:30', 'end' => '22:00'],
            ['code' => 'FRI1', 'day_id' => 5, 'start' => '08:00', 'end' => '09:30'],
            ['code' => 'FRI2', 'day_id' => 5, 'start' => '09:30', 'end' => '11:00'],
            ['code' => 'FRI3', 'day_id' => 5, 'start' => '11:00', 'end' => '12:30'],
            ['code' => 'FRI4', 'day_id' => 5, 'start' => '12:30', 'end' => '14:00'],
            ['code' => 'FRI5', 'day_id' => 5, 'start' => '14:00', 'end' => '15:30'],
            ['code' => 'FRI6', 'day_id' => 5, 'start' => '15:30', 'end' => '17:00'],
            ['code' => 'FRI7', 'day_id' => 5, 'start' => '17:00', 'end' => '18:30'],
            ['code' => 'FRI8', 'day_id' => 5, 'start' => '19:00', 'end' => '20:30'],
            ['code' => 'FRI9', 'day_id' => 5, 'start' => '20:30', 'end' => '22:00'],
            ['code' => 'SAT1', 'day_id' => 6, 'start' => '08:00', 'end' => '09:30'],
            ['code' => 'SAT2', 'day_id' => 6, 'start' => '09:30', 'end' => '11:00'],
            ['code' => 'SAT3', 'day_id' => 6, 'start' => '11:00', 'end' => '12:30'],
            ['code' => 'SAT4', 'day_id' => 6, 'start' => '12:30', 'end' => '14:00'],
            ['code' => 'SAT5', 'day_id' => 6, 'start' => '14:00', 'end' => '15:30'],
            ['code' => 'SAT6', 'day_id' => 6, 'start' => '15:30', 'end' => '17:00'],
            ['code' => 'SAT7', 'day_id' => 6, 'start' => '17:00', 'end' => '18:30'],
            ['code' => 'SAT8', 'day_id' => 6, 'start' => '19:00', 'end' => '20:30'],
            ['code' => 'SAT9', 'day_id' => 6, 'start' => '20:30', 'end' => '22:00'],
        ]);
    }
}
