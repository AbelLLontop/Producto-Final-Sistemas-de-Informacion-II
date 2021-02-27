<?php

$estadoAplicacion = "desarrollo";

if ($estadoAplicacion == "desarrollo") {
    define('URL', 'http://localhost/GITHUB/storek/');
    define('HOST','localhost');
    define('DB','storek');
    define('USER','root');
    define('PASSWORD','');
    define('CHARSET','utf8mb4');

    define('RUTA_DOMINIO',$_SERVER['DOCUMENT_ROOT'].'/GITHUB/storek/dominio/');
    define('RUTA_LOGICA',$_SERVER['DOCUMENT_ROOT'].'/GITHUB/storek/dominio/logica/');
    define('RUTA_PERSISTENCIA',$_SERVER['DOCUMENT_ROOT'].'/GITHUB/storek/persistencia/');
    define('RUTA_PRESENTACION',$_SERVER['DOCUMENT_ROOT'].'/GITHUB/storek/presentacion/');
    define('RUTA_HELPER',$_SERVER['DOCUMENT_ROOT'].'/GITHUB/storek/helpers/');

} else {
    define('URL', 'https://store-k.herokuapp.com/');
    define('HOST', 'bagx6dzg1mqq2qw80uuk-mysql.services.clever-cloud.com');
    define('DB', 'bagx6dzg1mqq2qw80uuk');
    define('USER', 'uvxcpgaty7nu2bpb');
    define('PASSWORD', 'qVUkm7m9ys1DnzuZjTcb');
    define('CHARSET', 'utf8mb4');
}
?>


