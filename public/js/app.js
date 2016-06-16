$(document).ready(function() {
	$cont = 1;
	$('#btn-add-image-product').click(function(event) {
		/* Act on the event */
		if($cont <= 5){
			$('#content-btn-add-imageProduct').append('<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ctnt-btn-add-imageProduct" level="lvl-'+$cont+'"><input type="file" class="form-control" name="imageProduct[]"></div>');				
			if($cont == 5){
				$(this).removeClass('btn-warning');
			}
		}
	});
});