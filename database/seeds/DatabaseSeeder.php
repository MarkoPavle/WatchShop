<?php

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
        /* $this->call(UsersTableSeeder::class);*/
        /*$this->call(BrendsTableSeeder::class);
        $this->call(SatTableSeeder::class);*/
        /*$this->call(RolesTableSeeder::class);*/
        $this->call(BrandsTableSeeder::class);
    }
}
