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
        ]);
    }
}
