<?php
	
    include 'plantilla.php';
	include_once '../libs/database.php';
	include '../config/config.php';
    $conexion = new Database();
    $consultarol=$_POST ['rol'];
	
	$query = "SELECT * FROM Personas where  ROL_idROL='".$consultarol."'";
	$resultado = $conexion->connect()->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(2,157,116);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(35,6,'nro_documento',1,0,'C',1);
	$pdf->Cell(35,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(35,6,'APELLIDO',1,0,'C',1);
	// $pdf->Cell(35,6,'CELULAR',1,0,'C',1);
	// $pdf->Cell(35,6,'DIRECCION',1,0,'C',1);
	 $pdf->Cell(40,6,'CORREO',1,0,'C',1);
	// $pdf->Cell(35,6,'CONTRASENA',1,0,'C',1);
	 $pdf->Cell(35,6,'ROL',1,1,'C',1); 
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch())
	{
		
		$pdf->Cell(35,6,utf8_decode($row['nro_documento']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['apellidos']),1,0,'C');
		// $pdf->Cell(35,6,$row['Celular'],1,1,'C',0);
		// $pdf->Cell(35,6,$row['Direccion'],1,1,'C',0);
		 $pdf->Cell(40,6,$row['correo'],1,0,'C');
		// $pdf->Cell(35,6,$row['Contrasena'],1,1,'C',0);
		 $pdf->Cell(35,6,$row['rol_idrol'],1,1,'C');
	}
	$pdf->Output();
?>