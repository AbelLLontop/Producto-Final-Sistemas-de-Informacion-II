<?php

Importar::headInicio();
Importar::css(['estilosGlobales',
    'barraNavegacion', 
    'contenedorPrincipalEmpleado',
    'tablaEmpleados',
    'formularioEmpleado']);
 
Importar::headCierre();

 
include_once 'componentes/formularios.php';
 
Importar::componente('barraNavegacion', [
    "seccion__clientes" => "seleccionado"
]);


include_once 'componentes/contenedorPrincipal.php';


Importar::js(['tabla','tablaCliente']);


Importar::footer()
?>



  