<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;
use App\Product;
use Session;
class ShopController extends Controller
{
    //------------------------------------------- Carrito de compras-------------------------------------------
    public function cart()
    {
    	// $css = '/tiendas/carrito.css';
    	// $js = '/tiendas/carrito.js';
        $query1 = Category::all();
    	$query2 = Product::all();
    	return view('categorias.tiendas.carrito',['css'=>$css,'js'=>$js,'categorias'=>$query1,'productos'=>$query2]);
    }
    public function addCart(Request $request, $id)
    {
        if($request->session()->has('carrito.productos')){
            $request->session()->push('carrito.productos',$id);
        }else{
            $arr = []; 
            $request->session()->put('carrito.productos',$arr);
            $request->session()->push('carrito.productos',$id);
        }
        return view('categorias.tiendas.reloadCar');
        
    }
    public function show()
    {
        $query = Product::all();
        return view('categorias.tiendas.showCarrito',['productos'=>$query]);
    }
}