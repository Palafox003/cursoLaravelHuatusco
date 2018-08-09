<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('marcas')->insert([
            'nombre' =>'HP',
        ]);
        DB::table('marcas')->insert([
            'nombre' =>'DELL',
        ]);
        DB::table('marcas')->insert([
            'nombre' =>'ASUS',
        ]);
        DB::table('marcas')->insert([
            'nombre' =>'MAC',
        ]);
        DB::table('marcas')->insert([
            'nombre' =>'TOSHIBA',
        ]);
        DB::table('marcas')->insert([
            'nombre' =>'ACER',
        ]);
    }
}
