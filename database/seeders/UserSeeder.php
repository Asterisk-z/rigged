<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->truncate();
        User::create([
            "username" => "admin",
            "firstName" => "big",
            "lastName" => "admin",
            "role" => "admin",
            "status" => "ACTIVE",
            "email" => "admin@example.com",
            "password" => Hash::make('123456')
        ]);

        User::create([
            "username" => "user",
            "firstName" => "big",
            "lastName" => "user",
            "role" => "user",
            "status" => "ACTIVE",
            "email" => "user@example.com",
            "password" => Hash::make('123456')
        ]);

        User::create([
            "username" => "usertwo",
            "firstName" => "small",
            "lastName" => "user",
            "role" => "user",
            "status" => "BLOCKED",
            "email" => "usertwo@example.com",
            "password" => Hash::make('123456')
        ]);
    }
}
