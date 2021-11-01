<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersqlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('users')->count()) {
            DB::unprepared(file_get_contents(__DIR__ . '/sql/elms_users.sql'));
        }
    }
}
