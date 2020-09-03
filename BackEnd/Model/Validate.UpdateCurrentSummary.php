<?php
include __DIR__ . '/Bridgedb.php';
$data=new BaseDatos;
$response=$data->UpdateCurrentSummary();    
echo $response;
//print_r($response);