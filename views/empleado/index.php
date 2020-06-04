<?php 
include_once 'models/nuevomodel.php';
$conexion = new Database();
session_start();

$iduser= $_SESSION['idPersonas'];
$sql="SELECT idPersonas,Nombre from personas where idPersonas='$iduser'";
$resultado = $conexion->connect()->query($sql);
$columna=$resultado->fetch();


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
<a style="color:red;font-size:20px;position:absolute;left:1200px;" 
 href="cerrar.php"><strong>Cerrar Sesion</strong></a> 
<h1 style="text-align:center;">Bienvenid@ a Salón TyA</h1>   
<h3>Iniciaste sesión como: <?php echo utf8_decode($columna['nombre']);?></h3>


<input style="display:block" type="button" class="btn btn-info btn-block" onclick="window.location='<?=constant('URL') . 'consultareserva'?>'" value="reservas"/>

</div>


<?php require 'views/footer.php';?>  
</body>
</html>