<?php

class GestionProductos extends Controlador
{
	function __construct(){
		parent::__construct();
	}
	public function render():void{
		$this->vista->render('productos/index');
	}
}

 ?>