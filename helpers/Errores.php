<?php 

class Errores {

    public static function mensaje($mensaje="Hubo un error",$titulo="Error",$mensaje2="Vuelva a la pagina anterior") {
    	$vista = new Vista();
    	$vista->titulo=$titulo;
        $vista->mensaje =$mensaje;
        $vista->mensaje2=$mensaje2;
        $vista->render('error/error');
        die();
    }

}
?>