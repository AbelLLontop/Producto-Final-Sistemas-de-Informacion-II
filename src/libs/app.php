<?php
include_once 'src/helpers/Ruteador.php';
include_once 'src/helpers/URL.php';

class App{
	private URL $url;
	private Controlador $controlador;

	function __construct(){
				$this->url = new URL('inicio');
		    	$ROUTER = new Ruteador($this->url->getURL());
		    	//Rutas
		    	foreach (glob(  'src/routes/*.php') as $filename) {
		    	include_once $filename;
		    	}
		    	$ROUTER->porDefecto(function(){
		    			echo "Esta pagina No existe";
		    	});

	}


	private function obtenerControlador($nombreArchivo):object{
		require_once 'src/controladores/'.$nombreArchivo[0].'.php';
		return new $nombreArchivo[0];
	}

	private function validarExistenciaControlador($nombreArchivo):bool{
		return (file_exists('src/controladores/'.$nombreArchivo[0].'.php'))?true:false;
	}


	private function validarExistenciaMetodoControlador($metodo):bool{
		return (method_exists($this->controlador, $metodo));
	}

}

 ?>