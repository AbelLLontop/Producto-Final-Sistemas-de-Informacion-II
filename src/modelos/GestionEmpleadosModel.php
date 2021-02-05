 <?php
include_once 'src/modelos/empleado.php';

class GestionEmpleadosModel extends Modelo{
	public function __construct(){
		parent::__construct();
	}

	public function traerListaEmpleados():array{
		$empleados = [];
		try{
			$query = $this->conexion->query("SELECT * FROM empleados");
			while($row=$query->fetch()){
				$empleado = new Empleado($row);
				array_push($empleados,$empleado);
			}
			return $empleados;
		}catch(PDOException $e){
			return [];
		}
	}

	public function insertarEmpleado($datosEmpleado):bool{
		$nuevoEmpleado = new Empleado($datosEmpleado);
		try{
			$query = $this->conexion->prepare('INSERT INTO empleados (nombre,apellidos,telefono,correo,cargo,dni) VALUES (:nombre,:apellidos,:telefono,:correo,:cargo,:dni)');
			$query->execute(
				[
					"nombre"=>$nuevoEmpleado->getNombre(),
					"apellidos"=>$nuevoEmpleado->getApellidos(),
					"telefono"=>$nuevoEmpleado->getTelefono(),
					"correo"=>$nuevoEmpleado->getCorreo(),
					"cargo"=>$nuevoEmpleado->getCargo(),
					"dni"=>$nuevoEmpleado->getDni()
			]);
				return true;

		}catch(PDOException $e){
			return false;
		}
	}
	public function actualizarEmpleado($empleado):bool{
				try{
					$query = $this->conexion->prepare('UPDATE empleados SET nombre=:nombre,apellidos=:apellidos,telefono=:telefono ,correo=:correo, cargo=:cargo, dni=:dni  WHERE id=:id');
					$query->execute($empleado);
					return true;

				}catch(PDOException $e){
					return false;
				}
	}

	public function eliminarEmpleado($idEmpleado):bool{
		try{
			$query = $this->conexion->prepare('DELETE FROM empleados where id=:id');
			$query->execute($idEmpleado);
				return true;
		}catch(PDOException $e){
			return false;
		}
	}

}

 ?>