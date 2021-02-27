<?php

Importar::headInicio();
 
Importar::css(['estilosGlobales',
    'barraNavegacion','pedidos']);
 
Importar::headCierre(); 

Importar::componente('barraNavegacion', [
    "seccion__pedidos" => "seleccionado"
]);

include_once 'componentes/contenedorPrincipal.php';


Importar::js(['']);


Importar::footer();
?>    