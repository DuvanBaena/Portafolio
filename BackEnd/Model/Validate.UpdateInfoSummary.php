<?php
include __DIR__ . '/Bridgedb.php';
$data=new BaseDatos;
$response=$data->UpdateInfoSummary();    
echo $response;
//print_r($response);