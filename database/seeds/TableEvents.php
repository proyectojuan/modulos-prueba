<?php

use Illuminate\Database\Seeder;

class TableEvents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        	'nombre'=>'Salida',
        	'descripcion'=>'Salida a comer',
        	'fecha'=>'2016-06-21',
        	'hora'=>'21:00:00',
        ]);
    }
}
