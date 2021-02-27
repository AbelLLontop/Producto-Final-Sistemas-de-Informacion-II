<?php 
$ROUTER->routear('GestionProductos/actualizarProducto', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionProductos']);
    $this->controlador->updateProducto();
});


$ROUTER->routear('GestionProductos/eliminarProducto', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionProductos']);
    $this->controlador->deleteProducto();
});

$ROUTER->routear('GestionProductos/crearProducto', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionProductos']);
    $this->controlador->createProducto();
});




?>