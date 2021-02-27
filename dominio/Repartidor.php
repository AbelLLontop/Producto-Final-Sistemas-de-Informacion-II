<?php 
require_once 'Empleado.php';

class Repartidor extends Empleado{
	
	private $pedidos = [];
	
	public function __construct($datos){
		parent::__construct($datos);

	}

	public function agregarPedido(Pedido $pedido){
		array_push($this->pedidosAsignados,$pedido);
	}

	public function getPedidos(){
		return $this->pedidos;
	}

}


 ?>