<?php
	include 'plantilla3.php';
	include_once '../libs/database.php';
	include '../config/config.php';
    $conexion = new Database();
 
	$query = "SELECT PERSONAS.Nombre,PERSONAS.Apellidos,sum(RESERVAS.Precio) AS TOTAL_SERVICIO
	,sum(RESERVAS.Precio*0.4) AS TOTAL_PAGADO_EMPLEADO FROM RESERVAS INNER JOIN Rol_Personas 
	ON Rol_Personas.idRol_Personas=RESERVAS.idRESERVAS INNER JOIN PERSONAS
	ON PERSONAS.idPersonas=Rol_Personas.PERSONAS_idPersonas 
	GROUP BY PERSONAS.idPersonas,PERSONAS.Nombre,PERSONAS.Apellidos";
	$resultado = $conexion->connect()->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
    $pdf->AddPage();
    
    $pdf->Cell(40,10,date('d/m/Y'),0,1,'L');
	$pdf->SetFillColor(2,157,116);
	$pdf->SetFont('Arial','B',10);
  
	
	$pdf->Cell(28,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(28,6,'APELLIDO',1,0,'C',1);
    $pdf->Cell(60,6,'TOTAL SERVICIO',1,0,'C',1);
    $pdf->Cell(60,6,'TOTAL PAGADO EMPLEADO',1,1,'C',1);
 

	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch())
	{
		
		$pdf->Cell(28,6,utf8_decode($row['nombre']),1,0,'C');
        $pdf->Cell(28,6,utf8_decode($row['apellidos']),1,0,'C');
        $pdf->Cell(60,6,utf8_decode($row['total_servicio']),1,0,'C');
        $pdf->Cell(60,6,utf8_decode($row['total_pagado_empleado']),1,1,'C');
  
        

	}
	$pdf->Output();
?>