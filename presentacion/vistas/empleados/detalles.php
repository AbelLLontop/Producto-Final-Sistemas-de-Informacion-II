<?php

Importar::headInicio();
Importar::css(['estilosGlobales', 'barraNavegacion', 'contenedorPrincipalDetalles']);
Importar::headCierre();

Importar::componente('barraNavegacion', [
    "seccion__empleados" => "seleccionado"
]);

Importar::componente('contenidoPrincipalDetalles', [
    "empleado" => $this->empleado
]);


Importar::footer()
?>


