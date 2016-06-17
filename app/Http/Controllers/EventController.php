<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Event;
class EventController extends Controller
{
    public function index()
    {
    	$eventos = Event::all();
    	$css = '/eventos/calendario.css';
    	$js = '/eventos/calendario.js';
    	return view('categorias.eventos.calendario',['eventos'=>$eventos,'css'=>$css,'js'=>$js]);
    }
}