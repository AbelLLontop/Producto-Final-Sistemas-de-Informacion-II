<?php 

class Vista{
	function __construct(){	
	}

	function render($nombreVista){
		require 'src/vistas/'.$nombreVista.'.php';
	}
}


 ?>