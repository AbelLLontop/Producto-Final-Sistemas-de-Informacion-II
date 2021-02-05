<?php
$estadoAplicacion = "desarrollo";

if($estadoAplicacion=="desarrollo"){
	define('URL','http://localhost/GITHUB/Producto-Final-Sistemas-de-Informacion-II/');
	//define('HOST','localhost');
	//define('DB','si');
	//define('USER','root');
	//define('PASSWORD','');
	//define('CHARSET','utf8mb4');
	define('HOST','bagx6dzg1mqq2qw80uuk-mysql.services.clever-cloud.com');
	define('DB','bagx6dzg1mqq2qw80uuk');
	define('USER','uvxcpgaty7nu2bpb');
	define('PASSWORD','qVUkm7m9ys1DnzuZjTcb');
	define('CHARSET','utf8mb4');
}else{
	define('URL','https://store-k.herokuapp.com/');
	define('HOST','bagx6dzg1mqq2qw80uuk-mysql.services.clever-cloud.com');
	define('DB','bagx6dzg1mqq2qw80uuk');
	define('USER','uvxcpgaty7nu2bpb');
	define('PASSWORD','qVUkm7m9ys1DnzuZjTcb');
	define('CHARSET','utf8mb4');
}



?>

