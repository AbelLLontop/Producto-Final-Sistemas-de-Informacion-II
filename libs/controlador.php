<?php

class Controlador {

    public $modelo;

    function __construct() {
        $this->vista = new Vista();
    }
 

    protected function obtenerDatosPost($datosPost){
    	$datos = L_POST::obtenerDatosPost($datosPost);
    	if($this->validarDatosPost($datos)){
    		return $datos;
    	}else{
    		return false;
    	}
    }

    protected function validarDatosPost($datosPost): bool {
    	return !empty($datosPost);
    }

    protected function volver($direccion) {
        $urlDireccion = "Location: ".URL.$direccion;
        header($urlDireccion);
        die();
    }
    
}
 
?>