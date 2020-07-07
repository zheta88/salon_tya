<?php
header('Content-Type: application/json');
include_once 'libs/database.php';
 include 'config/config.php';
 $conexion = new Database();

 $query= "SELECT servicios.Tipo_servicio AS title,pc.Nombre AS EMPLEADO,pe.Nombre AS CLIENTE, RESERVAS.Fecha AS start,RESERVAS.Fecha AS end,reservas.Hora as start,RESERVAS.Precio,RESERVAS.Observaciones
 FROM RESERVAS
INNER JOIN servicios ON servicios.idSERVICIOS=reservas.SERVICIOS_idSERVICIOS
INNER JOIN personas as pc on pc.idPersonas=reservas.Cliente
INNER JOIN personas as pe on pe.idPersonas=reservas.Empleado" ;
$resultado = $conexion->connect()->query($query);

$resultado=$resultado->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);

/*echo "La fecha seleccionada es " . $_GET['fecha'] . "y la hora es: " . $_GET['hora'];

SELECT * FROM PERSONAS WHERE TIPOSERV='MANICURISTA' AND ID_EMPLEADO NOT IN 
(SELECT ID_EMPLEADO  FROM RESERVAS 
WHERE FECHA='12233' AND hora='10' AND SERVICIO ='PEDICURE')*/

// $resultadoConsulta = array(
//     array( "id_empleado"=>1, "nombre_empleado"=>"Sebastian"),
//     array( "id_empleado"=>2, "nombre_empleado"=>"Rosa"),
// );

// if(count($resultadoConsulta) > 0){
//     $opcionesSelect = "";
//     foreach($resultadoConsulta as $fila){
//         $opcionesSelect .= "<option value='" . $fila['id_empleado'] . "'>" . $fila['nombre_empleado'] . "</option>";
//     }
//     echo $opcionesSelect;

// } else {
//     echo '<option VALUE="">No hay nadie disponible</option>';
// }

//conexion a base de datos (general),validar la consulta, cambiar el array por uno 
//que venga de la consulta