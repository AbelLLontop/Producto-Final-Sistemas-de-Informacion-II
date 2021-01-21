
<section class="contenido_general">
	<div class="inline">
			<button id="btn_agregarNuevoEmpleado" class="btn btn_agregar"><?= Importar::SVG('persona_mas') ?>Agregar</button>
	<input class="busqueda" 
			type="text" 
			placeholder="Digite DNI de empleado a buscar/Busqueda aun en desarrollo"
			disabled 
			>
	</div>

	<div class="contenedorTabla">	
	<?php Importar::componente('empleados','tablaEmpleados',["empleados"=>$data["empleados"]]); ?>
     <div id="mensajetablaVacia" class="mensajetablaVacia"><div>Tabla vacia</div></div>
	</div>

</section>
 