<?php

class Ruteador {

    private $url; 
    public $existeRuta = false;

    function __construct($url) {
        $this->url = $url;
    }

    public function routear($url, $funcion) {
        $urlOriginal = $this->url;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $igualdad = count($urlOriginal) == count($url);
        $datosRetorno = [];
        if ($igualdad) {
            foreach ($url as $key => $value) {
                if ($value[0] != ":") {
                    if ($url[$key] != $urlOriginal[$key]) {
                        $datosRetorno = [];
                        $igualdad = false;
                        break;
                    }
                } else {
                    $dato = str_replace(":", "", $value);
                    $nuevo = array($dato => $urlOriginal[$key]);
                    $datosRetorno = array_merge($datosRetorno, $nuevo);
                }
            }
        }
        if ($igualdad) {
            $funcion($datosRetorno);
            $this->existeRuta = true;
        }
    }

    public function porDefecto($funcion) {
        if (!$this->existeRuta) {
            $funcion();
        }
    }

}

?>