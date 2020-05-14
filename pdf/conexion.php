<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'salon3');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>