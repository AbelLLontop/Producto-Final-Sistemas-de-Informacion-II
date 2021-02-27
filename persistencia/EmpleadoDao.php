<?php

/* @author ABEL */
include_once RUTA_DOMINIO.'Empleado.php';
include_once 'DAO.php';

class EmpleadoDao extends DAO {
 
    public function listar(): array {
        $empleados = [];
        try {
            $query = $this->conexion->query("SELECT * FROM empleados");
            while ($datos = $query->fetch()) { 
                $empleado = new Empleado($datos);
                array_push($empleados, $empleado);
            }
            return $empleados;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function crear($empleado): bool {
        try {
            $query = $this->conexion->prepare('INSERT INTO empleados (id,nombres,apellidos,telefono,correo,cargo,dni) VALUES (:id,:nombres,:apellidos,:telefono,:correo,:cargo,:dni)');

            $query->execute([
                "id"=>$empleado->getId(),
                "nombres"=>$empleado->getNombres(),
                "apellidos"=>$empleado->getApellidos(),
                "telefono"=>$empleado->getTelefono(),
                "correo"=>$empleado->getCorreo(),
                "cargo"=>$empleado->getCargo(),
                "dni"=>$empleado->getDni()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function actualizar($empleado): bool {
        try {
            $query = $this->conexion->prepare('UPDATE empleados SET nombres=:nombres,apellidos=:apellidos,telefono=:telefono ,correo=:correo, cargo=:cargo, dni=:dni  WHERE id=:id');
           $query->execute([
                "id"=>$empleado->getId(),
                "nombres"=>$empleado->getNombres(),
                "apellidos"=>$empleado->getApellidos(),
                "telefono"=>$empleado->getTelefono(),
                "correo"=>$empleado->getCorreo(),
                "cargo"=>$empleado->getCargo(),
                "dni"=>$empleado->getDNI(),

            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function eliminar($idEmpleado): bool {
        try {
            $query = $this->conexion->prepare('DELETE FROM empleados where id=:id');
            $query->execute($idEmpleado);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function leer($id) {
        $empleados = [];
        try {
            $query = $this->conexion->prepare("SELECT * FROM empleados where dni=:id");
            $query->execute(["id"=>$id]);
            
            $data = $query->fetch();
            $empleado=[];
            if($data){
                 $empleado = new Empleado($data);     
            }            
            return $empleado;
           
        } catch (PDOException $e) {
            print_r("fallo");
            return [];
        }
    }

}
