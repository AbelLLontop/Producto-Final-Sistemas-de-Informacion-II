<?php

$ROUTER->routear('GestionEmpleados/actualizarEmpleado', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionEmpleados']);
    $this->controlador->updateEmpleado();
});


$ROUTER->routear('GestionEmpleados/eliminarEmpleado', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionEmpleados']);
    $this->controlador->deleteEmpleado();
});


$ROUTER->routear('GestionEmpleados/crearEmpleado', function($data) {
    $this->controlador = $this->obtenerControlador(['C_GestionEmpleados']);
    $this->controlador->createEmpleado();
});
?>