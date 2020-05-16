<?php
	include 'plantilla.php';
    require 'conexion.php';
    $consultacedula=$_POST ['documento'];
	
	$query = "SELECT * FROM personas where Cedula='".$consultacedula."'";
	$resultado = $pgsql->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(2,157,116);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(35,6,'CEDULA',1,0,'C',1);
	$pdf->Cell(35,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(35,6,'APELLIDO',1,0,'C',1);
	// $pdf->Cell(35,6,'CELULAR',1,0,'C',1);
	// $pdf->Cell(35,6,'DIRECCION',1,0,'C',1);
	 $pdf->Cell(40,6,'CORREO',1,0,'C',1);
	// $pdf->Cell(35,6,'CONTRASENA',1,0,'C',1);
	 $pdf->Cell(35,6,'ROL',1,1,'C',1); 
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(35,6,utf8_decode($row['Cedula']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['Nombre']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['Apellidos']),1,0,'C');
		// $pdf->Cell(35,6,$row['Celular'],1,1,'C',0);
		// $pdf->Cell(35,6,$row['Direccion'],1,1,'C',0);
		 $pdf->Cell(40,6,$row['Correo'],1,0,'C');
		// $pdf->Cell(35,6,$row['Contrasena'],1,1,'C',0);
		 $pdf->Cell(35,6,$row['ROL_idROL'],1,1,'C');
	}
	$pdf->Output();
?>