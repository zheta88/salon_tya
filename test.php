<?php

/*echo "La fecha seleccionada es " . $_GET['fecha'] . "y la hora es: " . $_GET['hora'];

SELECT * FROM PERSONAS WHERE TIPOSERV='MANICURISTA' AND ID_EMPLEADO NOT IN 
(SELECT ID_EMPLEADO  FROM RESERVAS 
WHERE FECHA='12233' AND hora='10' AND SERVICIO ='PEDICURE')*/

$resultadoConsulta = array(
    array( "id_empleado"=>1, "nombre_empleado"=>"Sebastian"),
    array( "id_empleado"=>2, "nombre_empleado"=>"Rosa"),
);

if(count($resultadoConsulta) > 0){
    $opcionesSelect = "";
    foreach($resultadoConsulta as $fila){
        $opcionesSelect .= "<option value='" . $fila['id_empleado'] . "'>" . $fila['nombre_empleado'] . "</option>";
    }
    echo $opcionesSelect;

} else {
    echo '<option VALUE="">No hay nadie disponible</option>';
}

//conexion a base de datos (general),validar la consulta, cambiar el array por uno 
//que venga de la consulta