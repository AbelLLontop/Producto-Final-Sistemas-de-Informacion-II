<?php

/* @author ABEL */
include_once 'DaoFactory.php';
include_once 'EmpleadoDao.php';
include_once 'ClienteDao.php';
include_once 'ProductoDao.php';

class DaoFactoryMysql implements DaoFactory {
    public function getEmpleadoDao(): \Dao {
        $empleado = new EmpleadoDao();
        return $empleado;
    }
    
    public function getProductoDao(): \Dao {
        $producto = new ProductoDao();
        return $producto;
    }
    
    public function getClienteDao(): \Dao {
        $cliente = new ClienteDao();
        return $cliente;
    }

    public function getPedidoDao(): \Dao {
        $pedido = new PedidoDao();
        return $pedido;
    }

}
 
 