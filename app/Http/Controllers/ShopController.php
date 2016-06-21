<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    public function cart()
    {
    	// Carrito de compras
    	$css = '/tiendas/carrito.css';
    	$js = '/tiendas/carrito.js';
    	return view('categorias.tiendas.carrito',['css'=>$css,'js'=>$js]);
    }
}
