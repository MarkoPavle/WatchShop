<?php

use Illuminate\Database\Seeder;
use App\Models\Sat;

class SatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         {
            Sat::create([
                'name' => 'Casio' ,
                'slug' => 'casio' ,
                'details' => 'silver',
                'price' => rand(12399, 33399),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                /*'category_id' => 1*/
            ]);
        }
        Sat::create([
            'name' => 'Festina',
            'slug' => 'festina',
            'details' => 'silver',
            'price' => 14999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            /*'category_id' => 2,*/
        ]);
        Sat::create([
            'name' => 'Fossil',
            'slug' => 'fossil',
            'details' => 'silver',
            'price' => 22999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            /*'category_id' => 3,*/
        ]);
        Sat::create([
            'name' => 'Citizen',
            'slug' => 'citizen',
            'details' => 'silver',
            'price' => 34999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            /*'category_id' => 5,*/
        ]);
        Sat::create([
            'name' => 'Swatch',
            'slug' => 'swatch',
            'details' => 'silver',
            'price' => 12999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            /*'category_id' => 7,*/
        ]);


    }
}
