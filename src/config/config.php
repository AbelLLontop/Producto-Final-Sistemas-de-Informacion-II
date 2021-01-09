<?php
$estadoAplicacion = "heroku-asd";


if($estadoAplicacion=="desarrollo"){
	define('URL','http://localhost/SI/');
}else{
	define('URL','https://store-k.herokuapp.com/');
}



define('HOST','bagx6dzg1mqq2qw80uuk-mysql.services.clever-cloud.com');
define('DB','bagx6dzg1mqq2qw80uuk');
define('USER','uvxcpgaty7nu2bpb');
define('PASSWORD','qVUkm7m9ys1DnzuZjTcb');
define('CHARSET','utf8mb4');
?>

