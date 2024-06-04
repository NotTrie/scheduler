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
            ['code' => 'ER','name' => 'Erdi', 'user_id' => 2], 
            ['code' => 'ZD','name' => 'Zidan', 'user_id' => 3],
            ['code' => 'TA','name' => 'Febroy', 'user_id' => 4],
            ['code' => 'RZ','name' => 'Rizky', 'user_id' => 5],
            ['code' => 'AD','name' => 'Andini', 'user_id' => 6],
            ['code' => 'NK','name' => 'Eunike', 'user_id' => 7],
            ['code' => 'DY','name' => 'Dea', 'user_id' => 8],
            ['code' => 'SP','name' => 'Sipa', 'user_id' => 9],
            ['code' => 'FO','name' => 'Filio', 'user_id' => 10],
            ['code' => 'BY','name' => 'Bayu', 'user_id' => 11],
            ['code' => 'FZ','name' => 'Firza', 'user_id' => 12],
            ['code' => 'HF','name' => 'Hafri', 'user_id' => 13],
            ['code' => 'RG','name' => 'Ragil', 'user_id' => 14],
            ['code' => 'SK','name' => 'Seka', 'user_id' => 15],
            ['code' => 'MC','name' => 'Michael', 'user_id' => 16],
            ['code' => 'FI','name' => 'Febry', 'user_id' => 17],
            ['code' => 'WC','name' => 'Wiliam', 'user_id' => 18],
            ['code' => 'DV','name' => 'David', 'user_id' => 19],
            ['code' => 'MF','name' => 'Fabian', 'user_id' => 20],
            ['code' => 'NZ','name' => 'Nouval', 'user_id' => 21],
            ['code' => 'FD','name' => 'Faidil', 'user_id' => 22],
            ['code' => 'RA','name' => 'Resifa', 'user_id' => 23],
        ]);
    }
}
