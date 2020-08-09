<?php

class Conexion {

	var $conector;

	public  function __construct(){
	
// <!-- Developer -->
$this->conector=new mysqli("localhost", "root", "", "websites");

// <!-- Production -->
// $this->conector=new mysqli("gpm4.whdns.co", "duvanba2_AdminTest", "gdGargEgo8FX", "duvanba2_WebSites");


if ($this->conector->connect_errno) {
    die("Fallo al conectar a MySQL: (" .$this->conector->connect_errno . ") " . $this->conector->connect_error);
    exit();

    }

        mysqli_set_charset($this->conector,"utf8");
    

    }

}
?>