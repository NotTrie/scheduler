<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::insert([
            ['code' => 'P', 'name' => 'Pemrograman', 'slot' => 4],
            ['code' => 'AK', 'name' => 'Aplikasi Komputasi', 'slot' => 4],
            ['code' => 'AP', 'name' => 'Aplikasi Profesional', 'slot' => 4],
            ['code' => 'J', 'name' => 'Jaringan', 'slot' => 2],
        ]);
    }
}
