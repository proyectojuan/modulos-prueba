$(document).ready(function() {
	$('#productosCarrito > div > .row > button').click(function(e) {
		e.preventDefault();
		$.get($ruta+'/tiendas/addCarrito/'+$(this).parent().parent().attr('tar'),function(data){
			$('#ShowCartButton').html(data);
			alert('Producto añadido al carrito');
		});
	});
	$('#ShowCartButton > a').click(function(e){
		e.preventDefault();
		$.get($ruta+'/tiendas/showCarrito',function(data){
			$('#insertModalsSpace').html(data);
			$('#myModal').modal('show');
		});
	});
});