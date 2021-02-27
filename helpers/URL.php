<?php

class URL {

    private $url;

    function __construct($urlPorDefecto) {
        $this->url = ($this->validarUrl()) ? ($this->obtenerUrl()) : [$urlPorDefecto];
    }

    function getURL() {
        return $this->url;
    } 

    private function obtenerUrl(): array {
        $url = $_GET['url'];
        $url = isset($url) ? $url : null;
        $url = $this->convertirUrl_Array($url);
        return $url;
    }

    private function validarUrl(): bool {

        return (($_GET['url']!="") ? true : false);
    }

    private function convertirUrl_Array($url): array {
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        return $url;
    }

}

?>