<?php

use Illuminate\Database\Seeder;

class TableUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Andres',
        	'email'=>'andres.rios.afrc@gmail.com',
        	'password'=>bcrypt('admin'),
        ]);
    }
}
