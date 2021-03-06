<?php
include_once RUTA_PERSISTENCIA.'DaoFactoryMysql.php';
include_once 'Logica.php';
/* @author ABEL */

class LogicaProducto extends Logica{    

    public function listarProductos(): array {
        return $this->daoSQL->getProductoDao()->listar();
    }

    public function crearProducto($producto): bool {
        return $this->daoSQL->getProductoDao()->crear($producto);
    }

    public function actualizarProducto($producto): bool {
        return $this->daoSQL->getProductoDao()->actualizar($producto);
    }

    public function eliminarProducto($id): bool {
        return $this->daoSQL->getProductoDao()->eliminar($id);
    }
    
    public function leerProducto($id) {
        return $this->daoSQL->getProductoDao()->leer($id);
    }
    
}

?>
