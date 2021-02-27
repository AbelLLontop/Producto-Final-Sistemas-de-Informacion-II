<?php

$ROUTER->routear('GestionClientes/actualizarCliente', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionClientes']);
    $this->controlador->updateCliente();
});


$ROUTER->routear('GestionClientes/eliminarCliente', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionClientes']);
    $this->controlador->deleteCliente();
});


$ROUTER->routear('GestionClientes/crearCliente', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionClientes']);
    $this->controlador->createCliente();
});
?>