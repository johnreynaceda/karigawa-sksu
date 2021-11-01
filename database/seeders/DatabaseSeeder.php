<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          $this->call(PhilippineProvincesTableSeeder::class);
          // $this->call(PhilippineRegionsTableSeeder::class);
          $this->call(PhilippineCitiesTableSeeder::class);
          // $this->call(PhilippineBarangaysTableSeeder::class);
        //  $this->call(UserSeeder::class);
          
          $this->call(UsersqlSeeder::class);
          
          $this->call(UserFacultySeeder::class);
           $this->call(UserDepartmentCampusProgramDesignationSeeder::class);
   

          $this->call(UserFacultySeeder::class);
    }
}
