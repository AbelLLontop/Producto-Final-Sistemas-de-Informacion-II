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
    "seccion__empleados" => "seleccionado"
]);


include_once 'componentes/contenedorPrincipal.php';


Importar::js(['tabla','tablaEmpleado']);


Importar::footer()
?>



  