 <?php 

/* @author ABEL */
include_once RUTA_PERSISTENCIA.'DaoFactoryMysql.php';
include_once 'Logica.php';

class LogicaCliente extends Logica{


    public function listarClientes(): array {
        return $this->daoSQL->getClienteDao()->listar();
    }

    public function crearCliente($cliente): bool {
        return $this->daoSQL->getClienteDao()->crear($cliente);
    }

    public function actualizarCliente($cliente): bool {
        return $this->daoSQL->getClienteDao()->actualizar($cliente);
    }

    public function eliminarCliente($id): bool {
        return $this->daoSQL->getClienteDao()->eliminar($id);
    }
    
    public function leerCliente($id) {
        return $this->daoSQL->getClienteDao()->leer($id);
    }
    

}

?>
