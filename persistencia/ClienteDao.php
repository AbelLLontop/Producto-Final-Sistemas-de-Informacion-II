 <?php

/* @author ABEL */
include_once RUTA_DOMINIO.'Cliente.php';
include_once 'DAO.php';

class ClienteDao extends DAO {
 
    public function listar(): array { 
        $clientes = [];
        try {
            $query = $this->conexion->query("SELECT * FROM clientes");
            while ($datos = $query->fetch()) { 
                $cliente = new Cliente();
                $cliente->setId($datos['id']);
                $cliente->setNombres($datos['nombres']);
                $cliente->setApellidos($datos['apellidos']);
                $cliente->setDireccion($datos['direccion']);
                $cliente->setTelefono($datos['telefono']);
                $cliente->setCorreo($datos['correo']);
                $cliente->setDni($datos['dni']);                
                array_push($clientes, $cliente);
            }
            return $clientes;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function crear($cliente): bool {
        try {
            $query = $this->conexion->prepare('INSERT INTO clientes (nombres,apellidos,telefono,correo,direccion,dni) VALUES (:nombres,:apellidos,:telefono,:correo,:direccion,:dni)');

            $query->execute([
                "nombres"=>$cliente->getNombres(),
                "apellidos"=>$cliente->getApellidos(),
                "telefono"=>$cliente->getTelefono(),
                "correo"=>$cliente->getCorreo(),
                "direccion"=>$cliente->getDireccion(),
                "dni"=>$cliente->getDni()
            ]);
            return true;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function actualizar($cliente): bool {
        try {
            $query = $this->conexion->prepare('UPDATE clientes SET nombres=:nombres,apellidos=:apellidos,telefono=:telefono ,correo=:correo, direccion=:direccion, dni=:dni  WHERE id=:id');
           $query->execute([
                "id"=>$cliente->getId(),
                "nombres"=>$cliente->getNombres(),
                "apellidos"=>$cliente->getApellidos(),
                "telefono"=>$cliente->getTelefono(),
                "correo"=>$cliente->getCorreo(),
                "direccion"=>$cliente->getDireccion(),
                "dni"=>$cliente->getDNI(),

            ]);
            return true;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function eliminar($id): bool {
        try {
            $query = $this->conexion->prepare('DELETE FROM clientes where id=:id');
            $query->execute($id);
            return true;
        } catch (PDOException $e) {
            Errores::mensaje($e->getMessage(),"Error en la consulta");        
        }
    }

    public function leer($id) {
        try {
            $query = $this->conexion->prepare("SELECT * FROM clientes where dni=:id");
            $query->execute(["id"=>$id]);
            
            $data = $query->fetch();
            $cliente=[];
            if($datos){
                $cliente = new Cliente();
                $cliente->setId($datos['id']);
                $cliente->setNombres($datos['nombres']);
                $cliente->setApellidos($datos['apellidos']);
                $cliente->setDireccion($datos['direccion']);
                $cliente->setTelefono($datos['telefono']);
                $cliente->setCorreo($datos['correo']);
                $cliente->setDni($datos['dni']); 
            }            
            return $cliente;
           
        } catch (PDOException $e) {
                       Errores::mensaje($e->getMessage(),"Error en la consulta");        

        }
    }

}
