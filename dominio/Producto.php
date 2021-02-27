<?php

class Producto {

    private $id;
    private $nombre;
    private $precio;
    private $categoria;
    private $stock; 
    private $descripcion;
    private $imagen;
 
 
    public function __construct($datos) {
        $this->id = $datos['id'] ?? 'default';
        $this->stock = $datos['stock'];
        $this->descripcion = $datos['descripcion'];
        $this->nombre ="".$datos['nombre'];
        $this->precio = $datos['precio']; 
        $this->categoria = $datos['categoria'];
        $this->imagen = $datos['imagen'];
    }

    public function getStock(){
        return $this->stock;
    } 
    public function getImagen(){
        return $this->imagen;
    } 

    public function getDescripcion(){
       return $this->descripcion;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getCategoria(){
        return $this->categoria;
    }


}

?>