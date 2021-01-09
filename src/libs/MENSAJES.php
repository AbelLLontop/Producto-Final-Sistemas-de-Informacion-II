<?php 

class MENSAJES{
	public static function imprimir($estado,$mensaje,$array_variables=[]){
		$mensajeFinal=[];
		$mensajeFinal = array_merge($mensajeFinal,["estado"=>$estado],["mensaje"=>$mensaje],$array_variables); 
		echo json_encode($mensajeFinal);
	}
}


 ?>