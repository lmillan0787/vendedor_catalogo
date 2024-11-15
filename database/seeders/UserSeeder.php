<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Luis Millan',
                'email' => 'lmillan0787@gmail.com',
                'password' => Hash::make('12345678')
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
