<?php

/* @author ABEL */
include_once RUTA_PERSISTENCIA.'DaoFactoryMysql.php';
include_once 'Logica.php';

class LogicaEmpleado extends Logica{

    public function listarEmpleados(): array {
        return $this->daoSQL->getEmpleadoDao()->listar();
    }

    public function crearEmpleado($empleado): bool {
        return $this->daoSQL->getEmpleadoDao()->crear($empleado);
    }

    public function actualizarEmpleado($empleado): bool {
        return $this->daoSQL->getEmpleadoDao()->actualizar($empleado);
    }

    public function eliminarEmpleado($id): bool {
        return $this->daoSQL->getEmpleadoDao()->eliminar($id);
    }
    
    public function leerEmpleado($id) {
        return $this->daoSQL->getEmpleadoDao()->leer($id);
    }
    

}

?>
