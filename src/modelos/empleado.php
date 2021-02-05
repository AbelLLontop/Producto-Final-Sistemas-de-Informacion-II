<?php
class Empleado{
	private $id;
	private $nombre;
	private $apellidos;
	private $telefono;
	private $correo;
	private $cargo;
	private $dni;

	public function __construct($datos){
		$this->id = $datos['id']??'default';
		$this->nombre = $datos['nombre'];
		$this->apellidos = $datos['apellidos'];
		$this->telefono = $datos['telefono'];
		$this->correo = $datos['correo'];
		$this->cargo = $datos['cargo'];
		$this->dni = $datos['dni'];
	}

	public function getId(){
		return $this->id;
	}
	public function getDni(){
		return $this->dni;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getApellidos(){
		return $this->apellidos;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function getCorreo(){
		return $this->correo;
	}
	public function getCargo(){
		return $this->cargo;
	}
}
 ?>