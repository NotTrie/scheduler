<?php

namespace Database\Seeders;

use App\Models\Assistant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssistantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assistant::insert([
            ['code' => 'ZD', 'name' => 'Zidan', 'user_id' => 2],
            ['code' => 'TA', 'name' => 'Febroy', 'user_id' => 3],
            ['code' => 'RZ', 'name' => 'Rizky', 'user_id' => 4],
            ['code' => 'RN', 'name' => 'Raihan', 'user_id' => 5],
        ]);
    }
}
