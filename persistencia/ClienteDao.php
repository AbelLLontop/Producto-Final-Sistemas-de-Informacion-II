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
                $cliente = new Cliente($datos);
                array_push($clientes, $cliente);
            }
            return $clientes;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function crear($cliente): bool {
        try {
            $query = $this->conexion->prepare('INSERT INTO clientes (id,nombres,apellidos,telefono,correo,direccion,dni) VALUES (:id,:nombres,:apellidos,:telefono,:correo,:direccion,:dni)');

            $query->execute([
                "id"=>$cliente->getId(),
                "nombres"=>$cliente->getNombres(),
                "apellidos"=>$cliente->getApellidos(),
                "telefono"=>$cliente->getTelefono(),
                "correo"=>$cliente->getCorreo(),
                "direccion"=>$cliente->getDireccion(),
                "dni"=>$cliente->getDni()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
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
            return false;
        }
    }

    public function eliminar($id): bool {
        try {
            $query = $this->conexion->prepare('DELETE FROM clientes where id=:id');
            $query->execute($id);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function leer($id) {
        $empleados = [];
        try {
            $query = $this->conexion->prepare("SELECT * FROM clientes where dni=:id");
            $query->execute(["id"=>$id]);
            
            $data = $query->fetch();
            $cliente=[];
            if($data){
                 $cliente = new Cliente($data);     
            }            
            return $cliente;
           
        } catch (PDOException $e) {
            print_r("fallo");
            return [];
        }
    }

}
