<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => md5('sifra123'),
            'role_id' => 1
        ]);

        \DB::table('users')->insert([
            'name' => 'Korisnik',
            'email' => 'korisnik@gmail.com',
            'password' => md5('sifra123'),
            'role_id' => 2
        ]);
    }
}
