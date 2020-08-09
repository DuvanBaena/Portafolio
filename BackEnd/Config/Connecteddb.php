<?php

class Conexion {

	var $conector;

	public  function __construct(){
	

$this->conector=new mysqli("localhost", "root", "", "websites");


if ($this->conector->connect_errno) {
    die("Fallo al conectar a MySQL: (" .$this->conector->connect_errno . ") " . $this->conector->connect_error);
    exit();

    }

        mysqli_set_charset($this->conector,"utf8");
    

    }

}
?>