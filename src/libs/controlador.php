<?php 

class Controlador{
	function __construct(){
		$this->vista = new Vista();
	}
	function loadModel($modelo){
		$model = $modelo[0];
		$url = 'src/modelos/'.$model.'Model.php';
		if(file_exists($url)){
			require $url;
			$modelName = $model."Model";
			$this->modelo = new $modelName;
		}
	}
}

 ?>