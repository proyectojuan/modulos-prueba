<?php

use Illuminate\Database\Seeder;

class TableCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'nombre'=>'pantalones',
        	'descripcion'=>'Pantalon caballero',
        ]);
        DB::table('categories')->insert([
        	'nombre'=>'camisetas',
        	'descripcion'=>'camisetas caballero',
        ]);
        DB::table('categories')->insert([
        	'nombre'=>'blusas',
        	'descripcion'=>'blusas dama',
        ]);
        DB::table('categories')->insert([
        	'nombre'=>'vestidos',
        	'descripcion'=>'vestidos dama',
        ]);
        DB::table('categories')->insert([
        	'nombre'=>'tenis',
        	'descripcion'=>'tenis dama | caballero',
        ]);
        DB::table('categories')->insert([
        	'nombre'=>'zapatos',
        	'descripcion'=>'zapatos caballero',
        ]);
        DB::table('categories')->insert([
        	'nombre'=>'trajes',
        	'descripcion'=>'trajes caballero',
        ]);
        DB::table('categories')->insert([
        	'nombre'=>'accesorios',
        	'descripcion'=>'accesorios dama | caballero',
        ]);
    }
}
