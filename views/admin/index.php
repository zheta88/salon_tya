<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
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

<h1>ADMIN</h1>
<a href="cerrar.php">Cerrar Sesion</a>
<input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consulta'?>'" value="Módulo Personas"/>
<input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consultareserva'?>'" value="Módulo Reservas"/>
<input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consultaempleado'?>'" value="Módulo Empleados"/>

</div>


<?php require 'views/footer.php';?>  
</body>
</html>