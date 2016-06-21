@extends('layouts.app')
@section('content')
	<?php
		$month=[1,2,3,4,5,6,7,8,9,10,11,12];
		$year=date("Y");
		$diaActual=date("j");
		# Obtenemos el dia de la semana del primer dia
		# Devuelve 0 para domingo, 6 para sabado
		foreach ($month as $month) {
		$diaSemana=date("w",mktime(0,0,0,$month,1,$year));
		# Obtenemos el ultimo dia del mes
		if($diaSemana == 0)
			$diaSemana = 1;
		$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
		// echo $ultimoDiaMes;
		$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
		"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
	?>
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1">
		<table id="calendar" class="table table-bordered">
			<caption><?php echo $meses[$month]." ".$year?></caption>
			<thead>
				<tr>
					<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
					<th>Vie</th><th>Sab</th><th>Dom</th>
				</tr>
			</thead>
			<tr>
				<?php
					$last_cell=$diaSemana+$ultimoDiaMes;
					if($diaSemana == 0){
						
					}

					$i = 1;
					if($diaSemana > 5)
						$init = 42;
					else
						$init = 35;
					// hacemos un bucle hasta 42, que es el máximo de valores que puede haber.. 5 filas de 7 columnas
					for($i;$i<=$init;$i++)
					{
						if($i==$diaSemana)
						{
							// determinamos en que dia empieza
							$day=1;
						}
						if($i<$diaSemana || $i>=$last_cell)
						{
							// celca vacia
							echo "<td>&nbsp;</td>";
						}else{

							// mostramos el dia
							if($day==$diaActual)
								echo "<td class='hoy'>$day</td>";
							else
								echo "<td>$day</td>";
							$day++;
						}
						// cuando llega al final de la semana, iniciamos una columna nueva
						if($i%7==0)	
						{
							echo "</tr><tr>\n";
						}
					}
				?>
			</tr>
		</table>
		<?php echo $diaSemana; ?>
	</div>
	<?php } ?>
	{{$eventos}}
@stop