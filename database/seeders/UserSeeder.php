<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'ian',
            'email' => 'ian@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'adam',
            'email' => 'adam@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'wili',
            'email' => 'wili@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'devan',
            'email' => 'devan@gmail.com',
            'password' => Hash::make('password'),
        ]);

    }
}
