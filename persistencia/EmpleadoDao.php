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
                $empleado->setId($datos['id']);
                $empleado->setNombres($datos['nombres']);
                $empleado->setApellidos($datos['apellidos']);
                $empleado->setTelefono($datos['telefono']);
                $empleado->setCorreo($datos['correo']);
                $empleado->setCargo($datos['cargo']);
                $empleado->setDni($datos['dni']);   
                array_push($empleados, $empleado);
            }
            return $empleados;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function crear($empleado): bool {
        try {
            $query = $this->conexion->prepare('INSERT INTO empleados (nombres,apellidos,telefono,correo,cargo,dni) VALUES (:nombres,:apellidos,:telefono,:correo,:cargo,:dni)');

            $query->execute([
                "nombres"=>$empleado->getNombres(),
                "apellidos"=>$empleado->getApellidos(),
                "telefono"=>$empleado->getTelefono(),
                "correo"=>$empleado->getCorreo(),
                "cargo"=>$empleado->getCargo(),
                "dni"=>$empleado->getDni()
            ]);
            return true;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
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
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function eliminar($idEmpleado): bool {
        try {
            $query = $this->conexion->prepare('DELETE FROM empleados where id=:id');
            $query->execute($idEmpleado);
            return true;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function leer($id) {
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
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

}
