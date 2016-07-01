<a href="#"><i class="fa fa-cart-arrow-down fa-2x"></i> &nbsp;&nbsp;<strong><?php $var = Session::get('carrito.productos'); echo ($var != '') ? count($var) : "no";  ?></strong></a>
