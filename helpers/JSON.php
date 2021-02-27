<?php

class JSON {

    public static function showMessage($estado, $array_variables = []) {
        $mensajeFinal = [];
        $mensajeFinal = array_merge($mensajeFinal, ["estado" => $estado], $array_variables);
        echo json_encode($mensajeFinal);
    }

}

?>