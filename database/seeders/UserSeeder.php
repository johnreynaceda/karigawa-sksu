<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create([
            'name' => 'Sample Account',
            'email' => 'sample@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Admin Account',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'isAdmin' => 1,
        ]);
    }
}
