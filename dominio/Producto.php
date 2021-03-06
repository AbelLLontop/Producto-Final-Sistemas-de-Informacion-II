<?php

class Producto {

    private $id; 
    private $nombre;
    private $precio;
    private $categoria;
    private $stock; 
    private $descripcion;
    private $imagen;
 
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getStock() {
        return $this->stock;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setPrecio($precio): void {
        $this->precio = $precio;
    }

    function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    function setStock($stock): void {
        $this->stock = $stock;
    }

    function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    function setImagen($imagen): void {
        $this->imagen = $imagen;
    }



}

?>