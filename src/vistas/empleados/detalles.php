<?php 
Importar::headInicio(); 
Importar::listaDirecciones('empleados','css_detalles'); 
Importar::headCierre(); 

Importar::componente('inicio','barraNavegacion',[
  				"seccion__empleados"=>"seleccionado"
  			]); 

Importar::componente('empleados','contenidoPrincipalDetalles',[
  			  "detalles"=>$this->dni
  			]); 

Importar::footer() 



?>


 