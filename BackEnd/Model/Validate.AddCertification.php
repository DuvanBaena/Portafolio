<?php
session_start();
include __DIR__ . '/Bridgedb.php';
$data=new BaseDatos;
$response=$data->AddCertification();    
echo $response;
