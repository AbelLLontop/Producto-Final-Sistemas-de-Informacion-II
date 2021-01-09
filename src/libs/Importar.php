<?php

class Importar{

	public static function css($direccion){	
		return '<link rel="stylesheet" href="'.constant('URL')."src/public/css/".$direccion.'.css">';
	}

	public static function js($direccion){
		return '<script type="text/javascript" src="'.constant('URL')."src/public/js/".$direccion.'.js"></script>';
	}

	public static function direccion($direccion){
		return '"'.constant('URL').$direccion.'"';
	}

	public static function componente($vista,$componente,$variables=[]){
		$data = $variables;
		$direccion ="src/vistas/".$vista."/componentes/".$componente.".php";
		if(file_exists($direccion)){
			require $direccion;
		}else{
			echo "Hubo un error al conseguir el componente ".$direccion;
		}	
	}

	public static function listaDirecciones($vista,$tipoArchivo){
		$direccion = 'src/vistas/'.$vista.'/direcciones/'.$tipoArchivo.'.php';
		if(file_exists($direccion)){
			require $direccion;
		}else{
			echo "Hubo un error al conseguir la direccion ".$tipoArchivo." :> ".$direccion;
		}
		 }
		 
	public static function headInicio(){
		require ('src/vistas/DOM/headInicio.php');		
	}
	public static function headCierre(){
		require ('src/vistas/DOM/headCierre.php');		
	}

	public static function footer(){
		require ('src/vistas/DOM/footer.php');
	}

	public static function SVG($nombreSVG){
	$direccion = "src/public/svg/".$nombreSVG.".svg";
		if(file_exists($direccion)){
			require $direccion;
		}else{
			echo "Hubo un error al conseguir el SVG ".$nombreArchivo." :> ";
		}
	}

}

?>