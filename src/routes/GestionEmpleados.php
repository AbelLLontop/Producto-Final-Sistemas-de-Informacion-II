<?php

$ROUTER->routear('GestionEmpleados/actualizarEmpleado/kasdkasdsa',function($data){
	$this->controlador = $this->obtenerControlador(['ActualizarEmpleado']);
	$this->controlador->loadModel(['GestionEmpleados']);
	$this->controlador->render();
});


$ROUTER->routear('GestionEmpleados/eliminarEmpleado',function($data){
	$this->controlador = $this->obtenerControlador(['EliminarEmpleado']);
	$this->controlador->loadModel(['GestionEmpleados']);
	$this->controlador->render();
});

$ROUTER->routear('GestionEmpleados/detallesEmpleado',function($data){
	$this->controlador = $this->obtenerControlador(['GestionEmpleados']);
	$this->controlador->loadModel(['GestionEmpleados']);
	$this->controlador->detallesEmpleado();
});

$ROUTER->routear('GestionEmpleados/crearEmpleado',function($data){
	$this->controlador = $this->obtenerControlador(['GestionEmpleados']);
	$this->controlador->loadModel(['GestionEmpleados']);
	$this->controlador->crearEmpleado();
});


 ?>