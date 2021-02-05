<?php

class Vista{
	function __construct(){
	}

	function render($nombreVista){
		require 'src/public/resources/vistas/'.$nombreVista.'.php';
	}

	function saludar(){
		echo "Hello world";
	}

}


 ?>