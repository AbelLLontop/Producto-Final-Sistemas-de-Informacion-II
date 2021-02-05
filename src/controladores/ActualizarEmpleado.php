<?php
include_once 'src/helpers/L_POST.php';
include_once 'src/helpers/MENSAJES.php';

class ActualizarEmpleado extends Controlador{
	function __construct(){
		parent::__construct();
	}

	public function render():void{
		if($this->validarDatos()){
			  $empleado = $this->obtenerDatos();
			if($this->modelo->actualizarEmpleado($empleado)){
				$this->redireccionar("GestionEmpleados");
			}
			else{
				MENSAJES::imprimir(false,'Hubo un un error al insertar los datos');
			}
		}else{
				MENSAJES::imprimir(false,'Hubo un un error al al validar los datos');
		}

	}

	private function redireccionar($direccion){
		$direccion  = "Location: ".constant('URL').$direccion;
		header($direccion);
	}


	private function obtenerDatos():array{
		$datosEmpleado = L_POST::obtenerDatosPost(['id','nombre','apellidos','telefono','correo','cargo','dni']);
		return $datosEmpleado;
	}

	private function validarDatos():bool{
		$validacion = false;
			if(L_POST::validarDatosPost(['id','nombre','apellidos','telefono','correo','cargo','dni'])){
				$validacion = true;
			}
		return $validacion;
	}

}


?>