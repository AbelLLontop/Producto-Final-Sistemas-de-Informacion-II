<?php

class Cliente {

    private $id;
    private $nombres;
    private $apellidos;
    private $direccion;
    private $telefono;
    private $correo;
    private $dni;

    function getId() {
        return $this->id;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getDni() {
        return $this->dni;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNombres($nombres): void {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    function setCorreo($correo): void {
        $this->correo = $correo;
    }

    function setDni($dni): void {
        $this->dni = $dni;
    }



}

?>