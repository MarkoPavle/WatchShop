<?php

use Illuminate\Database\Seeder;
use App\Models\Brend;

class BrendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Brend::insert([
            ['ime' => 'Casio', 'slug' => 'casio'],
            ['ime' => 'Festina', 'slug' => 'festina'],
            ['ime' => 'Fossil', 'slug' => 'fossil'],
            ['ime' => 'Police', 'slug' => 'police'],
            ['ime' => 'Citizen', 'slug' => 'citizen'],
            ['ime' => 'Espirit', 'slug' => 'espirit'],
            ['ime' => 'Swatch', 'slug' => 'swatch'],
        ]);
    }
}
