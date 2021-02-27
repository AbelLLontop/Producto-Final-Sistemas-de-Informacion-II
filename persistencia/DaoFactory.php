<?php
/* @author ABEL */
interface DaoFactory {
    public function getEmpleadoDao():Dao; 
    public function getProductoDao():Dao;
    public function getClienteDao():Dao;
    public function getPedidoDao():Dao;
}
