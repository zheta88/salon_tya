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
    if($_SESSION['rol'] != 1){
        header('location: login');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="stylesheets/foundation.min.css">
<link rel="stylesheet" href="stylesheets/main.css">
<link rel="stylesheet" href="stylesheets/app.css">
<script src="javascripts/modernizr.foundation.js"></script>
<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/main.css">
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    <title>SalonTYA</title>
</head>
<body>

<div class="row page_wrap">
  <!-- page wrap -->
  <div class="twelve columns">
    <!-- page wrap -->
    <div class="row">
      <div class="nine columns header_nav">
        <ul id="menu-header" class="nav-bar horizontal">
          <li><a href="index.html">Inicio</a></li>
          <li class="has-flyout"> <a href="#">salontya</a><a href="#" class="flyout-toggle"></a>
            <ul class="flyout">
              <li class="has-flyout"><a href="nosotros.html">Nosotros</a></li>
          
              <li class="has-flyout"><a href="contact.html">Contáctanos</a></li>
            </ul>
          </li>
          <li ><a href="login">Log in</a></li>
            <li ><a href="nuevo">Registro</a></li>
        </ul>
        <script>$('ul#menu-header').nav-bar();</script>
      </div>
      <div class="three columns header_logo"> <img src="public/image/logo.png" alt=""> </div>
    </div>
    <!-- END Header -->
    <div id="main">
<a style="color:red;font-size:20px;position:absolute;left:1200px;" 
 href="cerrar.php"><strong>Cerrar Sesion</strong></a>       
<div>
<h1 style="text-align:center;">Has iniciado Sesión como Administrador</h1>   
<h3>Bienvenido <?php echo utf8_decode($columna['nombre']);?></h3>
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
    <!-- end row -->
    <div class="row">
      <div class="twelve columns">
        <ul id="menu3" class="footer_menu horizontal">
          <li ><a href="index">Inicio</a></li>
        </ul>
      </div>
    </div>
    <script>$('ul#menu3').nav-bar();</script>
  </div>
</div>
<!-- end page wrap) -->
<!-- Included JS Files (Compressed) -->
<script src="javascripts/foundation.min.js"></script>
<!-- Initialize JS Plugins -->
<script src="javascripts/app.js"></script>
<?php require 'views/footer.php'?>
    
</body>
	
</html>







