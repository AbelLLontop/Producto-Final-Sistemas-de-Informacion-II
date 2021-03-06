<?php
include_once RUTA_HELPER . 'L_POST.php'; 
include_once RUTA_LOGICA.'LogicaPedidos.php';
include_once RUTA_DOMINIO . 'Pedido.php';


class C_GestionPedidos extends Controlador {

    function __construct() {
        parent::__construct();
        $this->logica = new LogicaPedidos();
        $this->direccionEliminar = Importar::direccion('GestionPedidos/eliminarPedido');
        $this->direccionEditar = Importar::direccion('GestionPedidos/editarPedido');
    } 

    function render() {
    	$pedidos = $this->logica->listarPedidos();
        
        $this->vista->direccionEliminar = $this->direccionEliminar;
        $this->vista->direccionEditar = $this->direccionEditar;
        
        $this->vista->pedidos = $pedidos;
        
        $this->vista->render('pedidos/index');
    }
      
    function mostrarDetalles($id){
         $detallesPedido = $this->logica->listarDetallesPedido($id);
         $pedido = $this->logica->leerPedido($id);

         
         $this->vista->direccionEliminar = $this->direccionEliminar;
          $this->vista->direccionEditar = $this->direccionEditar;

         $this->vista->pedido = $pedido;
         $this->vista->detallesPedido = $detallesPedido;      
         
         $this->vista->render('pedidos/index');
    }

      function cambiarEstado(){
        $datos = $this->obtenerDatosPost(['id','estado']);
           
            $pedido = new Pedido();
            $pedido->setId($datos['id']);
            $pedido->setEstado($datos['estado']);
            
            $this->logica->editarPedido($pedido);
            
            $this->volver("GestionPedidos/detalles/".$pedido->getId());

        

    }

    function eliminarPedido(){
        $datos = $this->obtenerDatosPost(['id']);
        
      
            $pedido = new Pedido();
            $pedido->setId($datos['id']);
           
            $this->logica->eliminarPedido($pedido);
           
            $this->volver("GestionPedidos");
       
    }
    
}
?> 
