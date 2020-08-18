<?php
session_start();
include __DIR__ . '/Bridgedb.php';
$data=new BaseDatos;
$response=$data->UpdateVersion();    
echo $response;
//print_r($response);