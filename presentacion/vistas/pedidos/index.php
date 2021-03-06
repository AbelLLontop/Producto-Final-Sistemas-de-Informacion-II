<?php

Importar::headInicio();
 
Importar::css(['estilosGlobales',
    'barraNavegacion','pedidos','formularioPedido']);
 
Importar::headCierre(); 

include_once 'componentes/formularios.php';

Importar::componente('barraNavegacion', [
    "seccion__pedidos" => "seleccionado"
]);

include_once 'componentes/contenedorPrincipal.php';


Importar::js(['tabla','tablaPedido']);


Importar::footer();
?>      