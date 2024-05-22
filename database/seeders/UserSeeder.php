<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::firstOrCreate([
            'family_name' => 'Dela Cruz',
            'given_name' => 'Juan',
            'email' => 'sysadmin@yahoo.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);
    }
}
