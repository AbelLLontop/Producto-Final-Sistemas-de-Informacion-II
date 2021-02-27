<?php

class C_GestionPedidos extends Controlador {

    function __construct() {
        parent::__construct();
    }

    function render() {
        $this->vista->render('pedidos/index');
    }


}
?> 
