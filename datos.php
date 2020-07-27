<?php 
 include_once 'libs/database.php';
 include 'config/config.php';
 $conexion = new Database();
$servicio=$_POST['servicio'];

$query = "SELECT servicios.Tipo_servicio as title,pc.Nombre AS EMPLEADO,pe.Nombre AS CLIENTE,
RESERVAS.Fecha ,RESERVAS.Fecha ,reservas.Hora,RESERVAS.Precio,RESERVAS.Observaciones 
INNER JOIN servicios ON servicios.idSERVICIOS=reservas.SERVICIOS_idSERVICIOS
INNER JOIN personas as pc on pc.idPersonas=reservas.Cliente
INNER JOIN personas as pe on pe.idPersonas=reservas.Empleado" ;

$resultado = $conexion->connect()->query($query);

	$cadena="<label>Empleado</label> 
			<select id='Cliente' name='Cliente'> ";

	while ($ver=mysqli_fetch_row($resultado)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

?>