<?php

class Importar {

    public static function css($direcciones) {
        foreach ($direcciones as $direccion) {
            echo '<link rel="stylesheet" href="' . constant('URL') . "public/css/" . $direccion . '.css">';
        }
    }

    public static function js($direcciones) {
        foreach ($direcciones as $direccion) {
            echo '<script type="text/javascript" src="' . constant('URL') . "public/js/" . $direccion . '.js"></script>';
        }
    }

    public static function direccion($direccion) {
        return '"' . constant('URL') . $direccion . '"';
    }

    public static function componente($componente, $variables = []) {
        $data = $variables;
        $direccion = "../resources/componentes/" . $componente . ".php";

        if (file_exists($direccion)) {
            require $direccion;
        } else {
            echo "Hubo un error al conseguir el componente " . $direccion;
        }
    }

    public static function headInicio() {
        require ('../resources/dom/headInicio.php');
    }

    public static function headCierre() {
        require ('../resources/dom/headCierre.php');
    }

    public static function footer() {
        require ('../resources/dom/footer.php');
    }

    public static function SVG($nombreSVG) {
        $direccion = "../public/svg/" . $nombreSVG . ".svg";
        if (file_exists($direccion)) {
            require $direccion;
        } else {
            echo "Hubo un error al conseguir el SVG " . $nombreArchivo . " :> ";
        }
    }

}

?>