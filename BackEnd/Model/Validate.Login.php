<?php
session_start();
include __DIR__ . '/Bridgedb.php';
$data=new BaseDatos;
$ingreso=$data->validaringreso();

//echo phpinfo();
if (count($ingreso[0]) == 1) {

	// cargar las variables de session
	$_SESSION['i_id']=$ingreso["UserID"];
	$_SESSION['i_nombre']=$ingreso["UserName"];
	$_SESSION['i_rol']=$ingreso["UserRole"];
// 	//$_SESSION['i_cargo']=$ingreso["cargo"];
    	
    	echo 1;

} else {
    echo 0;
}


?>