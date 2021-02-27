<?php 
 
class Pedido{ 
	private $id;
	private $cliente;
	private $fechaPedido;
	private $fechaEntrega;
	private $estado;
	private $repartidor;
	private $items = [];

	public function __construct($datos) {
		$this->id = $datos['id'] ?? 'default';
		$this->estado = $datos['estado'];
		$this->fechaPedido = $datos['fechapedido'];
		$this->fechaEntrega = $datos['fechaEntrega'];
	}

	
	public function setCliente(Cliente $cliente){
		$this->cliente = $cliente;
	}
	
	public function getId(){
		return $this->id;
	}
	public function getCliente(){
		return $this->cliente;
	}
	public function getFechaPedido(){
		return $this->fechapedido;
	}
	public function getFechaEntrega(){
		return $this->fechaEntrega;
	}
	public function getEstado(){
		return $this->estado;
	}

	public function getRepartidor(){
		return $this->repartidor;
	}
	public function setRepartidor(Repartidor $repartidor){
		$this->repartidor = $repartidor;
	}
	public function getRepartidor(){
		return $this-repartidor;
	}

	public function setItems(Item $item){
		array_push($this->items,$item);
	}
	public function getItems(){
		return $items;
	}
}


 ?>