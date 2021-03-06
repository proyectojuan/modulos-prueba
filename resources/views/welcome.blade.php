@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>{{ trans('welcome.title_modules') }} </strong></div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="" alt="">
								<div class="caption">
									<h3>Calendario Eventos</h3>
									<p>Modulo creado para ver los eventos disponibles</p>
									<p><a href="{{ url('/eventos/calendario') }}" class="btn btn-primary" role="button">Abrir</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="" alt="">
								<div class="caption">
									<h3>Carrito de Compras</h3>
									<p>Modulo pensado para las categorias <strong>"Tiendas"</strong></p>
									<p><a href="{{ url('/tiendas/carrito') }}" class="btn btn-primary" role="button">Abrir</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="" alt="">
								<div class="caption">
									<h3>Modulo #3</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, tempora! </p>
									<p><a href="#" class="btn btn-primary" role="button">Button</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="" alt="">
								<div class="caption">
									<h3>Modulo #4</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, perferendis! </p>
									<p><a href="#" class="btn btn-primary" role="button">Button</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
