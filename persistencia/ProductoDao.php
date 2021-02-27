<?php

/* @author ABEL */
include_once RUTA_DOMINIO.'Producto.php';
include_once 'DAO.php';

class ProductoDao extends DAO {

    public function listar(): array {
        $productos = [];
        try {
            $query = $this->conexion->query("SELECT * FROM productos");
            while ($datos = $query->fetch()) {
                $producto = new Producto($datos);
                array_push($productos, $producto);
            }
            return $productos;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function crear($producto): bool {
        try {
            $query = $this->conexion->prepare('INSERT INTO productos (id,stock,descripcion,nombre,precio,categoria,imagen) VALUES (:id,:stock,:descripcion,:nombre,:precio,:categoria,:imagen)');
             $query->execute([
                "id"=>$producto->getId(),
                "stock"=>$producto->getStock(),
                "descripcion"=>$producto->getDescripcion(),
                "nombre"=>$producto->getNombre(),
                "precio"=>$producto->getPrecio(),
                "categoria"=>$producto->getCategoria(),
                "imagen"=>$producto->getImagen(),

            ]);
            return true;
        } catch (PDOException $e) {
            print_r($e);
            return false;
        }
    }

    public function actualizar($producto): bool {
        try {
            $query = $this->conexion->prepare('UPDATE productos SET stock=:stock,descripcion=:descripcion,nombre=:nombre ,precio=:precio, categoria=:categoria,imagen=:imagen WHERE id=:id');
             $query->execute([
                "id"=>$producto->getId(),
                "stock"=>$producto->getStock(),
                "descripcion"=>$producto->getDescripcion(),
                "nombre"=>$producto->getNombre(),
                "precio"=>$producto->getPrecio(),
                "categoria"=>$producto->getCategoria(),
                "imagen"=>$producto->getImagen(),

            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function eliminar($idProducto): bool {
        try {
            $query = $this->conexion->prepare('DELETE FROM productos where id=:id');
            $query->execute($idProducto);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function leer($id) {
        return [];
    }

}
