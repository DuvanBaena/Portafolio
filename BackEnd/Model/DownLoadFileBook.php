<?php

	$path = "../../FrontEnd/Resources/img/Books/";	

	//$path = "../Resources/img/Books/";	
	if (isset($_REQUEST['n'])) $file=$_REQUEST['n'];

	if (is_file($path."/".$file)){
		// los header para forzar una descarga
			// 1. Indicar que se va a descargar
		// estos con comandos propios de html
		header("Content-type: Application/force-download");
		//2. le vamos a indicar que loi uqe va a descargar es un file
		header("Content-type: Application/octet-strem");
		//3. le vamos a indicar que nos muesre si descargamos  o abrimos el file
		header("Content-Disposition: attachment;filename=".$file);
		//4. indicamos a la descarga que se va a bajar un file binario
		header("Content-Transfer-Encoding: binary");
		// 5. indicamos el tamaño indicado del file para que nos muestre cuanto tiempo falta para descargarlo
		header("Content-Length:".filesize($path."/".$file));
		//6. lea EL ARCHIVO
		header($path."/".$file);

	} else{		

		
		die ("Archivo no se peude descargar");
	}

?>

