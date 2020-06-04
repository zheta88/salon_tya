<?php
session_start();

if(!isset($_SESSION['rol'])){
    header('location: login');
}else{
    if($_SESSION['rol'] != 3){
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

<h1>EMPLEADO</h1>
<a href="cerrar.php">Cerrar Sesion</a>
<input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consultareserva'?>'" value="reservas"/>

</div>


<?php require 'views/footer.php';?>  
</body>
</html>