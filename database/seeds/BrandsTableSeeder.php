<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('brands')->insert([
            'name' => 'Casio'
        ]);
        \DB::table('brands')->insert([
            'name' => 'Festina'
        ]);
        \DB::table('brands')->insert([
            'name' => 'Citizen'
        ]);
        \DB::table('brands')->insert([
            'name' => 'Esprit'
        ]);
        \DB::table('brands')->insert([
            'name' => 'Fossil'
        ]);
        \DB::table('brands')->insert([
            'name' => 'Swatch'
        ]);
    }
}
