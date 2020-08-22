<?php
include __DIR__ . '/Bridgedb.php';
$data=new BaseDatos;
$response=$data->UpdateInfoUser();    
echo $response;
//print_r($response);