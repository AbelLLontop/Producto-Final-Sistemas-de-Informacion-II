<?php

class GestionPedidos extends Controlador
{
	function __construct(){
		parent::__construct();
	}
	public function render():void{
		$this->vista->render('pedidos/index');
	}
}

 ?>