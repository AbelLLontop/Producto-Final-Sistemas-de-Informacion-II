<?php 

class Item{
	private Producto $producto; 
	private $cantidad;


	private setProducto(Producto $producto){
		$this->producto =$producto;
	}

	private setCantidad($cantidad){
		$this->cantidad =$cantidad;
	}

	private getProducto(){
		return $this->producto;
	}
	
	private getCantidad(){
		return $this->cantidad;
	}	
}


 ?>