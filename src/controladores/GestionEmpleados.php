<?php 
include_once 'src/libs/L_POST.php';
include_once 'src/libs/MENSAJES.php';

class GestionEmpleados extends Controlador{
	function __construct(){ 
		parent::__construct();
	}

	public function render():void{
		$empleados = $this->modelo->traerListaEmpleados();
		$this->vista->empleados = $empleados;
		$this->vista->render('empleados/index');
	}

	public function crearEmpleado():void{
		if($this->validarDatosEmpleado()){
			  $empleado = $this->obtenerDatosEmpleado();
			if($this->modelo->insertarEmpleado($empleado)){
				$this->redireccionar('GestionEmpleados');
			}
			else{
				MENSAJES::imprimir(false,'Hubo un un error al insertar los datos');
			} 
		}		
	} 


	public function detallesEmpleado():void{

		if($this->validarGetDniEmpleado()){
			$dni = L_POST::obtenerDatosGet(['dni'])['dni']; 
			$this->vista->dni = $dni;
		}else{
			$this->vista->dni = 'No se puede identificar el dni';	
		}
		$this->vista->render('empleados/detalles');
	}

	private function validarGetDniEmpleado():bool{
		$validacion = false;
		if(L_POST::validarDatosGet(['dni'])){
			$dato = L_POST::obtenerDatosGet(['dni']);
			if((strlen($dato['dni'])==8) && is_numeric($dato['dni'])){
				$validacion=true;
			}
		}	
		return $validacion;
	}


	public function actualizarEmpleado():void{
		if($this->validarDatosEmpleado()){
			  $empleado = $this->obtenerDatosEmpleado();

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

	public function eliminarEmpleado():void{		
		if(L_POST::validarDatosPost(['id'])){
			$id = L_POST::obtenerDatosPost(['id']);
			if($this->modelo->eliminarEmpleado($id)){
				MENSAJES::imprimir(true,'Eliminado con existo id: ',$id);
			}
			else{
				MENSAJES::imprimir(false,'Error al elminar empleado');
			}
		}
		else{
			MENSAJES::imprimir(false,'Error al validar el id');
		}
	}

	private function obtenerDatosEmpleado():array{
		$datosEmpleado = L_POST::obtenerDatosPost(['id','nombre','apellidos','telefono','correo','cargo','dni']);
		return $datosEmpleado;
	}

	private function validarDatosEmpleado():bool{
		$validacion = false;
			if(L_POST::validarDatosPost(['id','nombre','apellidos','telefono','correo','cargo','dni'])){
				/*
				Aqui se pondrian las validaciones de cada uno de los datos
				don con validacions me refiero a tipo de dato, tamaño, formato y eso.
				*/
				$validacion = true;
			}
		return $validacion;
	}	

}


?>