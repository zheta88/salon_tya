<?php
session_start();

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}else{
    if($_SESSION['rol'] != 2){
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

<h1>CLIENTE</h1>
<a href="cerrar.php">Cerrar Sesion</a>
<input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'nuevareserva'?>'" value="Agendar"/>
<input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consultareserva'?>'" value="Mis Reservas"/>

</div>


<?php require 'views/footer.php';?>  
</body>
</html>