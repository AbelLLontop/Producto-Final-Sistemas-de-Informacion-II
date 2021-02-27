<?php

Importar::headInicio();
 
Importar::css(['estilosGlobales',
    'barraNavegacion',
    'contenedorPrincipalProductos',
    'tablaProductos',
    'formularioProducto']);
 

Importar::headCierre();

include_once 'componentes/formularios.php';

Importar::componente('barraNavegacion', [
    "seccion__productos" => "seleccionado"
]);

include_once 'componentes/contenedorPrincipal.php';


Importar::js(['tabla','tablaProducto']);


Importar::footer();
?>    