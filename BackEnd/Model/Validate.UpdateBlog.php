<?php
session_start();
include __DIR__ . '/Bridgedb.php';
$data=new BaseDatos;
$response=$data->UpdateInfoBlog();    
echo $response;
