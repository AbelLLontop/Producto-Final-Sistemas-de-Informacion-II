<?php

class Empleado {

    private $id; 
    private $nombres; 
    private $apellidos;
    private $telefono;
    private $correo; 
    private $cargo; 
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

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getCargo() {
        return $this->cargo;
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

    function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    function setCorreo($correo): void {
        $this->correo = $correo;
    }

    function setCargo($cargo): void {
        $this->cargo = $cargo;
    }

    function setDni($dni): void {
        $this->dni = $dni;
    }



}

?>