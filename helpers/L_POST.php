<?php

class L_POST {

    private static function validarDatosPost($tipos = []) {
        $validacion = true;
        if (!empty($_POST)) {
            foreach ($tipos as $valor) {
                if (!isset($_POST[$valor])) {
                    $validacion = false;
                }
            }
        } else {
            $validacion = false;
        }
        return $validacion;
    }

    public static function obtenerDatosPost($tipos = []) {
        if(self::validarDatosPost($tipos)){
        $dato = [];
        foreach ($tipos as $valor) {
            $dato = array_merge($dato, [$valor => $_POST[$valor]]);
        }
        return $dato;
        }else{
            Errores::mensaje("Error en la validacion de los Datoa");
        }
    }

    private static function validarDatosGet($tipos = []) {
        $validacion = true;
        if (!empty($_GET)) {
            foreach ($tipos as $valor) {
                if (!isset($_GET[$valor])) {
                    $validacion = false;
                }
            }
        } else {
            $validacion = false;
        }
        return $validacion;
    }

    public static function obtenerDatosGet($tipos = []) {
        if(self::validarDatosGet($tipos)){
        $dato = [];
        foreach ($tipos as $valor) {
            $dato = array_merge($dato, [$valor => $_GET[$valor]]);
        }
        return $dato;
         }else{
            return [];
        }
    }

}

?>