<?php
$ROUTER->routear('inicio',function($data){
	$this->controlador = $this->obtenerControlador(['inicio']);
	$this->controlador->loadModel(['']);
	$this->controlador->render();
});

$ROUTER->routear('GestionEmpleados',function($data){
	$this->controlador = $this->obtenerControlador(['GestionEmpleados']);
	$this->controlador->loadModel(['GestionEmpleados']);
	$this->controlador->render();
});


$ROUTER->routear('GestionClientes',function($data){
	$this->controlador = $this->obtenerControlador(['GestionClientes']);
	$this->controlador->loadModel(['']);
	$this->controlador->render();
});


$ROUTER->routear('GestionProductos',function($data){
	$this->controlador = $this->obtenerControlador(['GestionProductos']);
	$this->controlador->loadModel(['']);
	$this->controlador->render();
});

$ROUTER->routear('GestionPedidos',function($data){
	$this->controlador = $this->obtenerControlador(['GestionPedidos']);
	$this->controlador->loadModel(['']);
	$this->controlador->render();
});


 ?>