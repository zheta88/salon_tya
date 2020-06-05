<?php 
include_once 'models/nuevomodel.php';
$conexion = new Database();
session_start();

$iduser= $_SESSION['idPersonas'];
$sql="SELECT idPersonas,Nombre,Correo from personas where idPersonas='$iduser'";
$resultado = $conexion->connect()->query($sql);
$columna=$resultado->fetch();


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
    <link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">
    <title>Admin</title>
</head>
<body>

<div id="main">
<a style="color:red;font-size:20px;position:absolute;left:1200px;" 
 href="cerrar.php"><strong>Cerrar Sesion</strong></a>       
<div>
<h1 style="text-align:center;">Panel Administrador</h1>   
<h3>Bienvenid@ <?php echo utf8_decode($columna['correo']);?></h3>
<p></p>
</div>
<div >
<input style="display:block" type="button" class="btn btn-info btn-block" onclick="window.location='<?=constant('URL') . 'consulta'?>'" value="Módulo Personas"/>
</div>
<div>
<input style="display:block;" type="button" class="btn btn-warning   btn-block" onclick="window.location='<?=constant('URL') . 'consultareserva'?>'" value="Módulo Reservas"/>
</div>
<input style="display:block;" type="button" class="btn btn-secundary btn-block" onclick="window.location='<?=constant('URL') . 'consultaempleado'?>'" value="Módulo Empleados"/>

</div>


<?php require 'views/footer.php';?>  
</body>
</html>