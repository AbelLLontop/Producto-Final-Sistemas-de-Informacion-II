<?php  
class App{
	private array $url;
	private object $controlador;

	public function __construct(){	
    	$this->url = ($this->validarUrl())?($this->obtenerUrl()):['inicio'];
		if($this->validarExistenciaControlador($this->url)){
			$this->controlador = $this->obtenerControlador($this->url);
			$this->controlador->loadModel($this->url);
			$this->ejecutarControlador();								
		}else{

			/*if($this->url[0]=='public'){
				if($this->validarExistenciaArchivoPublico($this->url)){
				$this->obtenerArchivoPublico($this->url);
				}else{
				echo "Recurso no encontrado";
				}
			}else{*/
				echo "Esta pagina no existe";

			//}
			
		}
	}	

	private function obtenerControlador($nombreArchivo):object{
		require_once 'src/controladores/'.$nombreArchivo[0].'.php';
		return new $nombreArchivo[0];
	}
	private function obtenerArchivoPublico($url){
		$direccion='src/public/'.$url[1].'/'.$url[2];
		require_once $direccion;
	}
	private function validarExistenciaArchivoPublico($url){
		$size = $this->obtenerNumeroParametros($url);
		$validacion = false;
		if($size==3){
			$direccion='src/public/'.$url[1].'/'.$url[2];
			$validacion = file_exists($direccion);
		}
		return $validacion;
	}

	private function validarExistenciaControlador($nombreArchivo):bool{
		return (file_exists('src/controladores/'.$nombreArchivo[0].'.php'))?true:false;
	}

	private function obtenerUrl():array{
		$url = $_GET['url'];
		$url = isset($url)?$url:null;
		$url = $this->convertirUrl_Array($url);
		return $url;
	}

	private function validarUrl():bool{
		return (isset($_GET['url'])?true:false);
	}

	private function convertirUrl_Array($url):array{	
		$url = rtrim($url,'/');
		$url = explode('/',$url);
		return $url;
	}
	private function obtenerNumeroParametros($url):int{
		return sizeof($url);
	}
	private function validarExistenciaMetodoControlador($metodo):bool{
		return (method_exists($this->controlador, $metodo));
	}
	private function ejecutarMetodoControlador($metodo,$parametro=null):void{
		if(isset($parametro)){
			$this->controlador->{$metodo}($parametro);	
		}else{
			$this->controlador->{$metodo}();
		}
	}

	private function ejecutarControlador():void{	  
		     switch ($this->obtenerNumeroParametros($this->url)) {
				case 1:
						$this->controlador->render();
					break;
				case 2:
						$metodo = $this->url[1];
							if($this->validarExistenciaMetodoControlador($metodo)){
								$this->ejecutarMetodoControlador($metodo);
							}else{
								echo "Metodo ".$metodo." no existe en el controlador ";
							}
					break;
				case 3:
					 	$metodo = $this->url[1];
					 	$parametro = $this->url[2];
							if($this->validarExistenciaMetodoControlador($metodo)){
								$this->ejecutarMetodoControlador($metodo,$parametro);			
							}else{
								echo "Metodo ".$metodo." no existe en el controlador ";
							}
					break;
				default:
					echo "No Puede acceder Aquí";
					break;
				}
	}

}

 ?>