<?php 
Importar::headInicio(); 
Importar::listaDirecciones('inicio','css'); 
Importar::headCierre(); 
  			
Importar::componente('inicio','barraNavegacion',[
  				"seccion__inicio"=>"seleccionado"
  			]); 
  			
Importar::footer(); 
?>