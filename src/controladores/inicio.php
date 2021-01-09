<?php 
 
class Inicio extends Controlador{
	
	function __construct(){
		parent::__construct();
	}

	public function render(){
		$this->vista->render('inicio/index');
	}


}



 ?>