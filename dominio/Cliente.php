<?php

class Cliente {

    private $id;
    private $nombres;
    private $apellidos;
    private $direccion;
    private $telefono;
    private $correo;
    private $dni;

    public function __construct($datos) {
        $this->id = $datos['id'] ?? 'default';
        $this->nombres = $datos['nombres'];
        $this->apellidos = $datos['apellidos'];
        $this->direccion = $datos['direccion'];
        $this->telefono = $datos['telefono'];
        $this->correo = $datos['correo'];
        $this->dni = $datos['dni'];
    }

    public function getId() {
        return $this->id;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getDni() {
        return $this->dni;
    }

}

?>