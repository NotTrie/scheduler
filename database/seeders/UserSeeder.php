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
            ['name' => 'Erdi', 'email' => 'erdi@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Zidan', 'email' => 'zidan@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Febroy', 'email' => 'febroy@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Rizky', 'email' => 'rizky@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Andini', 'email' => 'andini@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Eunike', 'email' => 'eunike@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Dea', 'email' => 'dea@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Sipa', 'email' => 'sipa@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Filio', 'email' => 'filio@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Bayu', 'email' => 'bayu@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Firza', 'email' => 'firza@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Hafri', 'email' => 'hafri@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Ragil', 'email' => 'ragil@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Seka', 'email' => 'seka@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Michael', 'email' => 'michael@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Febry', 'email' => 'febry@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Wiliam', 'email' => 'wiliam@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'David', 'email' => 'david@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Fabian', 'email' => 'fabian@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Nouval', 'email' => 'nouval@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Faidil', 'email' => 'faidil@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Resifa', 'email' => 'resifa@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
        ]);
    }
}
