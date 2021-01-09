<?php 
Importar::headInicio(); 
Importar::listaDirecciones('empleados','css'); 
Importar::headCierre(); 

Importar::componente('empleados','formularioEmpleado_contenedor'); 

Importar::componente('inicio','barraNavegacion',[
  				"seccion__empleados"=>"seleccionado"
  			]); 

Importar::componente('empleados','contenidoPrincipalEmpleados',[
  			  "empleados"=>$this->empleados
  			]); 
 

Importar::listaDirecciones('empleados','js'); 
Importar::footer() 


?>
