<?php
	include 'plantilla3.php';
    require 'conexion.php';
 
	$query = "SELECT PERSONAS.Nombre,PERSONAS.Apellidos,sum(RESERVAS.Precio) AS 'TOTAL_SERVICIO' ,sum(RESERVAS.Precio*0.4) AS 'TOTAL_PAGADO_EMPLEADO' 
    FROM RESERVAS
    INNER JOIN Rol_Personas ON Rol_Personas.idRol_Personas=RESERVAS.Rol_Personas_idRol_Personas
    INNER JOIN PERSONAS ON PERSONAS.idPersonas=Rol_Personas.PERSONAS_idPersonas 
    GROUP BY PERSONAS.idPersonas,PERSONAS.Nombre,PERSONAS.Apellidos";
	$resultado = $mysqli->query($query);
	
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
	
	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(28,6,utf8_decode($row['Nombre']),1,0,'C');
        $pdf->Cell(28,6,utf8_decode($row['Apellidos']),1,0,'C');
        $pdf->Cell(60,6,utf8_decode($row['TOTAL_SERVICIO']),1,0,'C');
        $pdf->Cell(60,6,utf8_decode($row['TOTAL_PAGADO_EMPLEADO']),1,1,'C');
  
        

	}
	$pdf->Output();
?>