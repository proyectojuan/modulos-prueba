<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ trans('landing.application_name') }}</title>

	<!-- Fonts -->
	<link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> -->
	
	<!-- Styles -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('/css/master.css') }}">
	<?php echo (!empty($css)) ? "<link rel='stylesheet' href=".url('/css'.$css).">" : "" ?>
	<style>
		body,html {
			font-family: 'Lato';
			height: 100%;
		}
		.fa-btn {
			margin-right: 6px;
		}
	</style>
</head>
<body id="app-layout">
	<!-- ====================================== MODAL ======================================================= -->
	<div id="insertModalsSpace"></div>
	<!-- ================================================================================================== -->
	<nav class="navbar navbar-static-top">
		<div class="container">
			<div class="navbar-header">

				<!-- Collapsed Hamburger -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars fa-2x"></i>
				</button>
				<!-- Branding Image -->
				<a class="navbar-brand" href="#">
					{{ trans('landing.application_name') }}
				</a>
			</div>

			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<!-- Left Side Of Navbar -->
				<ul class="nav navbar-nav">
					@if ((Request::url() != url('/home')) && (Request::url() != url('')))
						@if (Auth::check())
							<li><a href="<?php echo (Auth::check()) ? url('/home') : url('');?>">{{trans('landing.home_link')}}</a></li>
						@else
							<li><a href="<?php echo (Auth::check()) ? url('/') : url('');?>">{{trans('landing.home_link')}}</a></li>
						@endif
					@endif
					@if (Auth::guest())
						@if (!strpos(Request::url(),'/login'))
							<li class="pull-rigth"><a href="{{ url('/login') }}">{{ trans('landing.login_link') }}</a></li>
						@endif
						@if (!strpos(Request::url(),'/register'))
							<li class="pull-rigth"><a href="{{ url('/register') }}">{{ trans('landing.register_link') }}</a></li>
						@endif
					@else
						<li class="pull-rigth"><a href="{{ url('/logout') }}">{{ trans('landing.logout_link') }}</a></li>
					@endif
				</ul>
				@if (Request::url() == url('/tiendas/carrito'))
					<ul class="nav navbar-nav pull-right">
						<li id="ShowCartButton">
							<a href="#"><i class="fa fa-cart-arrow-down fa-2x"></i> &nbsp;&nbsp;<strong><?php $var = Session::get('carrito.productos'); echo ($var != '') ? count($var) : "no";  ?></strong></a>
						</li>
					</ul>
				@endif
			</div>
		</div>
	</nav>
	@yield('content')
	<input type="hidden" name="ruta" value="{{ url('') }}">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<!-- JavaScripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="{{url('js/app.js') }}"></script>
	<?php echo (!empty($js)) ? '<script src="'.url('/js'.$js).'" type="text/javascript" charset="utf-8" ></script>' : '' ?>
</body>
</html>