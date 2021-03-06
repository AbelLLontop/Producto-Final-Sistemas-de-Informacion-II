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
                $producto = new Producto();
                $producto->setCategoria($datos['categoria']);
                $producto->setDescripcion($datos['descripcion']);
                $producto->setId($datos['id']);
                $producto->setPrecio($datos['precio']);
                $producto->setNombre($datos['nombre']);
                $producto->setImagen($datos['imagen']);
                $producto->setStock($datos['stock']);                         
                array_push($productos, $producto);
            }
            return $productos;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function crear($producto): bool {
        try {
            $query = $this->conexion->prepare('INSERT INTO productos (stock,descripcion,nombre,precio,categoria,imagen) VALUES (:stock,:descripcion,:nombre,:precio,:categoria,:imagen)');
             $query->execute([
                "stock"=>$producto->getStock(),
                "descripcion"=>$producto->getDescripcion(),
                "nombre"=>$producto->getNombre(),
                "precio"=>$producto->getPrecio(),
                "categoria"=>$producto->getCategoria(),
                "imagen"=>$producto->getImagen(),

            ]);
            return true;
        } catch (PDOException $e) {
                       Errores::mensaje($e->getMessage(),"Error en la consulta");        

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
                       Errores::mensaje($e->getMessage(),"Error en la consulta");        

        }
    }

    public function eliminar($idProducto): bool {
        try {
            $query = $this->conexion->prepare('DELETE FROM productos where id=:id');
            $query->execute($idProducto);
            return true;
        } catch (PDOException $e) {
                       Errores::mensaje($e->getMessage(),"Error en la consulta");        

        }
    }

    public function leer($id) {
        return [];
    }

}
