<?php 

class L_POST{
	public static function validarDatosPost($tipos=[]){
		$validacion = true;
		if(!empty($_POST)){
			foreach($tipos as $valor) {if(!isset($_POST[$valor])){$validacion=false;}}	
		}else{
			$validacion=false;
		}
		return $validacion;
	}
	
	public static function obtenerDatosPost($tipos=[]){
		$dato=[];
		foreach($tipos as $valor) {$dato = array_merge($dato,[$valor=>$_POST[$valor]]);}
		return $dato;
	}
}

 ?>