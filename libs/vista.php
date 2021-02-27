<?php

class Vista {

    function __construct() {
        
    }

    function render($nombreVista) {
        require '../presentacion/vistas/' . $nombreVista . '.php';
    }

}

?>