<?php 
 
class Pedido{ 
	private $id;
	private $cliente;
	private $fechaPedido;
	private $fechaEntrega;
	private $estado;
	private $repartidor;
	private $items = [];

        function getId() {
            return $this->id;
        }

        function getCliente() {
            return $this->cliente;
        }

        function getFechaPedido() {
            return $this->fechaPedido;
        }

        function getFechaEntrega() {
            return $this->fechaEntrega;
        }

        function getEstado() {
            return $this->estado;
        }

        function getRepartidor() {
            return $this->repartidor;
        }

        function getItems() {
            return $this->items;
        }

        function setId($id): void {
            $this->id = $id;
        }

        function setCliente($cliente): void {
            $this->cliente = $cliente;
        }

        function setFechaPedido($fechaPedido): void {
            $this->fechaPedido = $fechaPedido;
        }

        function setFechaEntrega($fechaEntrega): void {
            $this->fechaEntrega = $fechaEntrega;
        }

        function setEstado($estado): void {
            $this->estado = $estado;
        }

        function setRepartidor($repartidor): void {
            $this->repartidor = $repartidor;
        }

        function addItem($item): void {
            array_push($this->items,$item);
        }


}


 ?>