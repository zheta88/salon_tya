<?php
header('Content-Type: application/json');


   include_once 'libs/database.php';
	include 'config/config.php';
    $conexion = new Database();
	
	$query = "SELECT servicios.Tipo_servicio as title,pc.Nombre AS EMPLEADO,pe.Nombre AS CLIENTE, RESERVAS.Fecha start,RESERVAS.Fecha end,reservas.Hora,RESERVAS.Precio,RESERVAS.Observaciones as descripcion
	FROM RESERVAS
   INNER JOIN servicios ON servicios.idSERVICIOS=reservas.SERVICIOS_idSERVICIOS
   INNER JOIN personas as pc on pc.idPersonas=reservas.Cliente
   INNER JOIN personas as pe on pe.idPersonas=reservas.Empleado" ;
   $resultado = $conexion->connect()->query($query);

   $resultadofinal=$resultado->fetchAll(PDO::FETCH_ASSOC);
   echo '['.json_encode($resultadofinal).']';  
    ?>