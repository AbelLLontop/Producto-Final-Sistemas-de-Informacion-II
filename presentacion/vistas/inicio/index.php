<?php

Importar::headInicio();
Importar::css(['estilosGlobales', 'barraNavegacion']);
Importar::headCierre();

Importar::componente('barraNavegacion', [
    "seccion__inicio" => "seleccionado"
]);







?>

<form action="http://192.168.1.96/GITHUB/ultima/login" method="post">
	<input type="submit" value="cerrarSesion" name="cerrar">
</form>

<?php
Importar::footer();
?>


