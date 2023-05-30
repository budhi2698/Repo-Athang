<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'  =>   'yaezer',
            'email' =>    'yaezerl@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10)
        ]);
    }
}
