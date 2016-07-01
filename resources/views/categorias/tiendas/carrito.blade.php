@extends('layouts.app')
@section('content')
	<div id="contenidoCarrito" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="menu" class="row text-center">
			<ul>
				<?php $cn = 1; ?>
				@foreach ($categorias as $ca)
					<li value="{{$ca->id}}">{{$ca->nombre}}</li>		
				@endforeach	
			</ul>
		</div>
		<div id="productosCarrito" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			@foreach ($productos as $pro)
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center" tar="{{$pro->id}}">
					<h3>{{$pro->nombre}}</h3>
					<p>{{$pro->descripcion}}</p>
					<small>{{$pro->precio}}</small>
					<div class="row text-center"><button type="button" class="btn"><i class="fa fa-cart-plus fa-2x"></i></button></div>
				</div>
			@endforeach
		</div>
	</div>
@endsection