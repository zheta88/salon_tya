<?php

require 'pdf/conexion.php';
    session_start();

    $iduser= $_SESSION['idPersonas'];
    $sql="SELECT idPersonas,Nombre from personas where idPersonas='$iduser'";
    $resultado = $mysqli->query($sql);
    $columna=$resultado->fetch_assoc();
   


    if(!isset($_SESSION['rol'])){
        header('location: login');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login');
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require 'views/header.php';?>
<div id="main">

<h1>ADMIN <?php echo utf8_decode($columna['Nombre']); ?></h1>
<a href="cerrar.php">Cerrar Sesion</a>
<input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consulta'?>'" value="Módulo Personas"/>
<input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consultareserva'?>'" value="Módulo Reservas"/>
<input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consultaempleado'?>'" value="Módulo Empleados"/>

</div>


<?php require 'views/footer.php';?>  
</body>
</html>