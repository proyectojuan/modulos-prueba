@extends('layouts.app')
@section('content')
	<?php
		$dia        = date('j');
		$mes        = date('m')-1;
		$ano        = date('Y');
		$fecha      = $dia.'-'.$mes.'-'.$ano;
		$timestamps = strtotime($fecha);
		$diasdelmes = date('t',$timestamps);
	?>
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1">
		<table class="table">
			<thead>
				<tr>
					<th class="text-center">Lunes</th>
					<th class="text-center">Martes</th>
					<th class="text-center">Miercoles</th>
					<th class="text-center">Jueves</th>
					<th class="text-center">Viernes</th>
					<th class="text-center">Sabado</th>
					<th class="text-center">Domingo</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@for ($i = 1; $i <= $diasdelmes ; $i++)
						<td class="text-center">{{$i}}</td>
						@if ($i % 7 == 0)
							</tr>
							<tr>
						@endif
					@endfor
				</tr>
			</tbody>
		</table>
	</div>
@stop