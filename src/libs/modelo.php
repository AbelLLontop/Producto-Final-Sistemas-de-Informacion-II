<?php

class Modelo{
	protected $conexion;
	function __construct(){
		$this->conexion = Database::getConnect();
	}
}

 ?>