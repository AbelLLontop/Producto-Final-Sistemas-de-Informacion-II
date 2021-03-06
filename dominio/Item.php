<?php 
class Item{
	private Producto $producto; 
	private $cantidad;

        function getProducto(): Producto {
            return $this->producto;
        }

        function getCantidad() {
            return $this->cantidad;
        }

        function setProducto(Producto $producto): void {
            $this->producto = $producto;
        }

        function setCantidad($cantidad): void {
            $this->cantidad = $cantidad;
        }

	
}


 ?>