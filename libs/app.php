<?php

include_once '../helpers/Ruteador.php';
include_once '../helpers/URL.php';

class App {

    private URL $url;
    private Controlador $controlador;

    function __construct() {
        $this->url = new URL('inicio');
        $ROUTER = new Ruteador($this->url->getURL());
        //Rutas 
        foreach (glob('../routes/*.php') as $filename) {
            include_once $filename;
        }
        $ROUTER->porDefecto(function() {
            Errores::mensaje("Pagina No Encontrada");
        });
    }

    private function obtenerControlador($nombreArchivo): object {
        require_once '../presentacion/' . $nombreArchivo[0] . '.php';
        return new $nombreArchivo[0];
    }

    private function validarExistenciaControlador($nombreArchivo): bool {
        return (file_exists('../presentacion/' . $nombreArchivo[0] . '.php')) ? true : false;
    }

    private function validarExistenciaMetodoControlador($metodo): bool {
        return (method_exists($this->controlador, $metodo));
    }

}

?>