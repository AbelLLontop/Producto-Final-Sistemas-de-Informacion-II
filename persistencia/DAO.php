<?php
include_once 'Conexion.php';
/* @author ABEL */

abstract class DAO {
    public $conexion;
    public function __construct() {
        $this->conexion=Conexion::getConnect();
    }

    abstract public function crear($object);
    
    abstract public function leer($id);

    abstract public function listar();

    abstract public function actualizar($object);

    abstract public function eliminar($id);
}

