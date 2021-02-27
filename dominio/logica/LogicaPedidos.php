<?php 

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

    public function eliminarPedido($id): bool {
        return $this->daoSQL->getPedidoDao()->eliminar($id);
    }
    
    public function leerPedido($id) {
        return $this->daoSQL->getPedidoDao()->leer($id);
    }
    

}



 ?>