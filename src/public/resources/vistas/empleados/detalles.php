<?php
Importar::headInicio();
Importar::listaDirecciones('empleados','css_detalles');
Importar::headCierre();

Importar::componente('barraNavegacion',[
  				"seccion__empleados"=>"seleccionado"
  			]);

Importar::componente('contenidoPrincipalDetalles',[
  			  "detalles"=>$this->dni
  			]);

Importar::footer()



?>


