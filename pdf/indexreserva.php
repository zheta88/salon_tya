<?php
	include 'plantilla2.php';
	include_once '../libs/database.php';
	include '../config/config.php';
    $conexion = new Database();
	
	$query = "SELECT servicios.Tipo_servicio AS SERVICIO,pc.Nombre AS EMPLEADO,pe.Nombre AS CLIENTE, RESERVAS.Fecha,reservas.Hora,RESERVAS.Precio,RESERVAS.Observaciones
	FROM RESERVAS
   INNER JOIN servicios ON servicios.idSERVICIOS=reservas.SERVICIOS_idSERVICIOS
   INNER JOIN personas as pc on pc.idPersonas=reservas.Cliente
   INNER JOIN personas as pe on pe.idPersonas=reservas.Empleado" ;
  
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Cell(40,10,'Reservas',0,1,'L'); 
	$pdf->Cell(40,10,date('d/m/Y'),0,1,'L'); 
	$pdf->SetFillColor(2,157,116);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(30,6,'SERVICIO',1,0,'C',1);
	$pdf->Cell(30,6,'EMPLEADO',1,0,'C',1);
	$pdf->Cell(30,6,'CLIENTE',1,0,'C',1);
;
	// $pdf->Cell(35,6,'CELULAR',1,0,'C',1);
	// $pdf->Cell(35,6,'DIRECCION',1,0,'C',1);
	 $pdf->Cell(30,6,'FECHA',1,0,'C',1);
	// $pdf->Cell(35,6,'CONTRASENA',1,0,'C',1);
     $pdf->Cell(30,6,'HORA',1,0,'C',1); 
     $pdf->Cell(30,6,'PRECIO',1,1,'C',1); 
	
	$pdf->SetFont('Arial','',8);

	if($_SESSION['rol'] !="1")
	$consulta .= ' WHERE Empleado=' . $_SESSION['idPersonas'] . ' OR Cliente=' . $_SESSION['idPersonas'];
	$resultado = $conexion->connect()->query($query);
	
	while($row = $resultado->fetch())
	{
		
		$pdf->Cell(30,6,utf8_decode($row['servicio']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['empleado']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['cliente']),1,0,'C');
		// $pdf->Cell(35,6,$row['Celular'],1,1,'C',0);
		// $pdf->Cell(35,6,$row['Direccion'],1,1,'C',0);
		 $pdf->Cell(30,6,$row['fecha'],1,0,'C');
		// $pdf->Cell(35,6,$row['Contrasena'],1,1,'C',0);
         $pdf->Cell(30,6,$row['hora'],1,0,'C');
         $pdf->Cell(30,6,$row['precio'],1,1,'C');
	}
	$pdf->Output();
?>