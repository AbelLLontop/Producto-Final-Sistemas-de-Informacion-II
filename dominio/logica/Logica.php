<?php

/* @author ABEL */

abstract class Logica {
     protected $daoSQL = null;
     
     public function __construct() {
        $this->daoSQL = new DaoFactoryMysql();
    }
    
}
