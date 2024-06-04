<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            ['name' => 'Zidan', 'email' => 'zidan@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Febroy', 'email' => 'febroy@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Rizky', 'email' => 'rizky@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Raihan', 'email' => 'raihan@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)], 
        ]);
    }
}
