<?php


$ROUTER->routear('inicio', function($data) {
    $this->controlador = $this->obtenerControlador(['C_Inicio']);
    $this->controlador->render();
});


$ROUTER->routear('GestionEmpleados', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionEmpleados']);
    $this->controlador->render();
});


$ROUTER->routear('GestionProductos', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionProductos']);
    $this->controlador->render();
});

$ROUTER->routear('GestionClientes', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionClientes']);
    $this->controlador->render();
});

$ROUTER->routear('GestionPedidos', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionPedidos']);
    $this->controlador->render();
});


?>