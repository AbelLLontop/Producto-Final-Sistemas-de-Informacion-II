<?php

class Empleado {

    private $id; 
    private $nombres; 
    private $apellidos;
    private $telefono;
    private $correo;
    private $cargo; 
    private $dni;

    public function __construct($datos) {
        $this->id = $datos['id']??'default';
        $this->nombres = $datos['nombres'];
        $this->apellidos = $datos['apellidos'];
        $this->telefono =$datos['telefono'];
        $this->correo = $datos['correo']; 
        $this->cargo = $datos['cargo'];
        $this->dni = $datos['dni'];
    } 

    public function getId() {
        return $this->id;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getCargo() {
        return $this->cargo;
    }

}

?>