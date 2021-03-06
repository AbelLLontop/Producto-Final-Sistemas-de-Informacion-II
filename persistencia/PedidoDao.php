<?php

/* @author ABEL */
include_once RUTA_DOMINIO . 'Pedido.php';
include_once RUTA_DOMINIO . 'Cliente.php';
include_once RUTA_DOMINIO . 'Producto.php';
include_once RUTA_DOMINIO . 'Item.php';

include_once 'DAO.php';

class PedidoDao extends DAO {

    public function listar(): array {
        $pedidos = [];
        try {
            $query = $this->conexion->query("
select
C.nombres as cliente_nombres,
C.dni as cliente_dni,
P.fechapedido as pedido_fechapedido,
P.fechaentrega as pedido_fechaentrega,
P.estado as pedido_estado,
P.id as pedido_id
from pedidos P
INNER JOIN clientes C
on P.cliente = C.id");
            while ($datos = $query->fetch()) {
                $pedido = new Pedido();
                $pedido->setId($datos['pedido_id']);
                $pedido->setFechaEntrega($datos['pedido_fechaentrega']);
                $pedido->setFechaPedido($datos['pedido_fechapedido']);
                $pedido->setEstado($datos['pedido_estado']);
                $cliente = new Cliente();
                $cliente->setNombres($datos['cliente_nombres']);
                $cliente->setDni($datos['cliente_dni']);
                $pedido->setCliente($cliente);
                array_push($pedidos, $pedido);
            }
            return $pedidos;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function listarDetallesPedido($id) {
        $pedido = new Pedido();
        $pedido->setId($id);
        try {
            $query = $this->conexion->prepare('SELECT 
dp.cantidad as dp_cantidad,
p.id as producto_id,
p.nombre as producto_nombre,
p.imagen as producto_imagen,
p.descripcion as producto_descripcion,
p.stock as producto_stock,
p.precio as producto_precio
FROM detallespedido dp
INNER JOIN productos p on 
dp.producto = p.id where dp.pedido =:id;');

            $query->execute([
                "id" => $pedido->getId(),
            ]);

            while ($datos = $query->fetch()) {
                $item = new Item();
                $producto = new Producto();
                $producto->setId($datos['producto_id']);
                $producto->setNombre($datos['producto_nombre']);
                $producto->setImagen($datos['producto_imagen']);
                $producto->setPrecio($datos['producto_precio']);
                $producto->setStock($datos['producto_stock']);
                $producto->setDescripcion($datos['producto_descripcion']);
                $item->setProducto($producto);
                $item->setCantidad($datos['dp_cantidad']);
                $pedido->addItem($item);
            }
            return $pedido;
        } catch (PDOException $e) {
                        Errores::mensaje($e->getMessage(),"Error en la consulta");        

        }
    }

    public function editarPedido($pedido){
         try {
            $query = $this->conexion->prepare('UPDATE pedidos SET estado=:estado WHERE id=:id');
            $query->execute([
                "id" => $pedido->getId(),
                "estado" => $pedido->getEstado()
            ]);
            return true;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }

    }

    public function crear($cliente): bool {
        try {
            $query = $this->conexion->prepare('INSERT INTO clientes (id,nombres,apellidos,telefono,correo,direccion,dni) VALUES (:id,:nombres,:apellidos,:telefono,:correo,:direccion,:dni)');

            $query->execute([
                "id" => $cliente->getId(),
                "nombres" => $cliente->getNombres(),
                "apellidos" => $cliente->getApellidos(),
                "telefono" => $cliente->getTelefono(),
                "correo" => $cliente->getCorreo(),
                "direccion" => $cliente->getDireccion(),
                "dni" => $cliente->getDni()
            ]);
            return true;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function actualizar($cliente): bool {
        try {
            $query = $this->conexion->prepare('UPDATE clientes SET nombres=:nombres,apellidos=:apellidos,telefono=:telefono ,correo=:correo, direccion=:direccion, dni=:dni  WHERE id=:id');
            $query->execute([
                "id" => $cliente->getId(),
                "nombres" => $cliente->getNombres(),
                "apellidos" => $cliente->getApellidos(),
                "telefono" => $cliente->getTelefono(),
                "correo" => $cliente->getCorreo(),
                "direccion" => $cliente->getDireccion(),
                "dni" => $cliente->getDNI(),
            ]);
            return true;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function eliminar($pedido): bool {
        try {
            $query = $this->conexion->prepare('DELETE FROM pedidos where id=:id');
            $query->execute([
                "id"=>$pedido->getId()
            ]);
            return true;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function leer($id) {
        $pedido = new Pedido();
        $pedido->setId($id);
        try {
            $query = $this->conexion->prepare("
select
C.nombres as cliente_nombres,
C.dni as cliente_dni,
P.fechapedido as pedido_fechapedido,
P.fechaentrega as pedido_fechaentrega,
P.estado as pedido_estado,
P.id as pedido_id
from pedidos P
INNER JOIN clientes C
on P.cliente = C.id where P.id = :id");

            $query->execute([
                "id" => $pedido->getId(),
            ]);

            if ($datos = $query->fetch()) {
                $pedido = new Pedido();
                $pedido->setId($datos['pedido_id']);
                $pedido->setFechaEntrega($datos['pedido_fechaentrega']);
                $pedido->setFechaPedido($datos['pedido_fechapedido']);
                $pedido->setEstado($datos['pedido_estado']);
                $cliente = new Cliente();
                $cliente->setNombres($datos['cliente_nombres']);
                $cliente->setDni($datos['cliente_dni']);
                $pedido->setCliente($cliente);
            }

            return $pedido;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

}
