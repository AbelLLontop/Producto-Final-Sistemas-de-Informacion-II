<?php
Importar::headInicio();
Importar::listaDirecciones('inicio','css');

Importar::listaDirecciones('productos','css');

Importar::headCierre();

Importar::componente('barraNavegacion',[
  				"seccion__productos"=>"seleccionado"
  			]);

Importar::componente('contenedorPrincipalProductos');

Importar::footer();
?>