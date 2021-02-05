<?php
include_once 'src/helpers/L_POST.php';
include_once 'src/helpers/MENSAJES.php';

class EliminarEmpleado extends Controlador{
	function __construct(){
		parent::__construct();
	}

	function render():void{
		if(L_POST::validarDatosPost(['id'])){
			$id = L_POST::obtenerDatosPost(['id']);
			if($this->modelo->eliminarEmpleado($id)){
				MENSAJES::imprimir(true,"Eliminado con existo id: {$id['id']}" ,$id);
			}
			else{
				MENSAJES::imprimir(false,'Error al elminar empleado');
			}
		}
		else{
			MENSAJES::imprimir(false,'Error al validar el id');

		}
	}

}

?>