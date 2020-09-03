<?php

if(isset($_REQUEST['id'])){
include __DIR__ . '/Bridgedb.php';
$data=new BaseDatos;
$response=$data->DeleteWorkSummary();
echo $response;
//print_r($ingreso);
}

?>