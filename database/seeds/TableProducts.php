<?php

use Illuminate\Database\Seeder;

class TableProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'category_id' => 1,
        	'nombre' => 'Pantalon Jeen',
        	'descripcion'=>'Pantalon para caballero negro clasico',
        	'precio'=>80000,
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'nombre' => 'Camiseta Blanca',
            'descripcion'=>'Camiseta tipo polo blanca',
            'precio'=>40000,
        ]);
        DB::table('products')->insert([
        	'category_id' => 3,
        	'nombre' => 'Blusa Blanca',
        	'descripcion'=>'Blusa blanca sin mangas',
        	'precio'=>50000,
        ]);
    }
}
