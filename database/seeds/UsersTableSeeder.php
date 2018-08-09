<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
            'nombre' =>'Israel',
            'paterno' =>'Palafox',
            'materno' =>'Morales',
            'email' =>'palafox@gmail.com',
            'password' => bcrypt('123456'),
            'telefono' =>'123456',
        ]);

	      DB::table('users')->insert([
	        'nombre' =>'Luis Ángel',
	        'paterno' =>'Bandala',
	        'materno' =>'Ortega',
	        'email' =>'15610064@gmail.com',
	        'password' => bcrypt('123456'),
	        'telefono' =>'123456',
        ]);

        DB::table('users')->insert([
            'nombre' =>'Alexis Ventura',
            'paterno' =>'Becerra',
            'materno' =>'De Luna',
            'email' =>'15610176@gmail.com',
            'password' => bcrypt('123456'),
            'telefono' =>'123456',
        ]);

        DB::table('users')->insert([
            'nombre' =>'Emmanuel',
            'paterno' =>'Chávez',
            'materno' =>'Morales',
            'email' =>'15610621@gmail.com',
            'password' => bcrypt('123456'),
            'telefono' =>'123456',
        ]);

        DB::table('users')->insert([
            'nombre' =>'Luis Eduardo',
            'paterno' =>'Cobos',
            'materno' =>'Guerrero',
            'email' =>'14610396@gmail.com',
            'password' => bcrypt('123456'),
            'telefono' =>'123456',
        ]);
    }
}
