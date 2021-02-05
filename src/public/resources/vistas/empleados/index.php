<?php
Importar::headInicio();
Importar::listaDirecciones('empleados','css');
Importar::headCierre();

Importar::componente('formularioEmpleado_contenedor');

Importar::componente('barraNavegacion',[
  				"seccion__empleados"=>"seleccionado"
  			]);

Importar::componente('contenidoPrincipalEmpleados',[
  			  "empleados"=>$this->empleados
  			]);


Importar::listaDirecciones('empleados','js');
Importar::footer()


?>
