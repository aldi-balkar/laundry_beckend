<?php

namespace Database\Seeders;

use App\Models\user;
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
        $users = [
            [
                'username' => 'aldibalkar',
                'email' => 'aldibalkar23@gmail.com',
                'password' => Hash::make('12345678'),
            ],
        ];
        foreach ($users as $userItem) {
            User::create($userItem);
        }
    }
}
