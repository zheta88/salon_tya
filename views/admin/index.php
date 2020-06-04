


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
<div>
<h1 style="text-align:center;">¡Bienvenido Administrador!</h1>   
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