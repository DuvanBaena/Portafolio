<?php
session_start();
include __DIR__ . '/Bridgedb.php';
$data=new BaseDatos;
// 
$ingreso=$data->validaringreso();
// si devuelve un vector con datos, cargar las variables de session y responderle al ajax un valor. En este caso 1.
// En caso contrario, le respondemos al ajax 0.
//print_r($ingreso);

if (count($ingreso[0])==1) {

	// cargar las variables de session
	$_SESSION['i_id']=$ingreso["idCli"];
	$_SESSION['i_nombre']=$ingreso["NomCli"];
	$_SESSION['i_lastname']=$ingreso["ApeCli"];
			//$_SESSION['i_cargo']=$ingreso["cargo"];

    	
    	echo 1;

} else {
    echo 0;
}


?>