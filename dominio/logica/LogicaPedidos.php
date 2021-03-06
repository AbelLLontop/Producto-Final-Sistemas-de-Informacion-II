<?php 
include_once RUTA_PERSISTENCIA.'DaoFactoryMysql.php';
include_once 'Logica.php';

class LogicaPedidos extends Logica{ 

    public function listarPedidos(): array {
        return $this->daoSQL->getPedidoDao()->listar();
    }

    public function crearPedido($pedido): bool {
        return $this->daoSQL->getPedidoDao()->crear($pedido);
    }

    public function actualizarPedido($empleado): bool {
        return $this->daoSQL->getPedidoDao()->actualizar($pedido);
    }

    public function eliminarPedido($pedido): bool {
        return $this->daoSQL->getPedidoDao()->eliminar($pedido);
    }
    
    public function leerPedido($id) {
        return $this->daoSQL->getPedidoDao()->leer($id);
    }
    public function listarDetallesPedido($id) {
        return $this->daoSQL->getPedidoDao()->listarDetallesPedido($id);
    }

    public function editarPedido($pedido){
        return $this->daoSQL->getPedidoDao()->editarPedido($pedido);
    }
    

}



 ?>