<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">
    
    <title>Tabla consulta</title>
    <style>

    #tabla{
        width:50%;
        background:#e6ffff;
      
       
    }
    th{
        color:blue;
        font-size:20px;
    }
    td{
        color:black;
    }
      
    </style>
</head>
<body>
<div class="table table-bordered table">
  <table class="table">

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" >

<a class="navbar-brand" href="#">Salon</a>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03" >
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>index">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>nuevo">Registro</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>login">Login</a></li>
        </ul>
        
    </div>
</nav>



    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
    

        <table id="tabla">
            <thead>
            <?php
            if ($_SESSION['rol'] !="3"){
                ?>
            <div class="boton_nuevo">
        <input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'nuevareserva'?>'" value="nueva reserva"/>
        <a href="reportereserva">

            <img src="public/image/pdf.png" style="width:40px;">

            </a>
            <?php } ?>
        </div>
       
                <tr>
                    <!-- <th>Número de reserva</th> -->
                    <th>Servicio</th>
                    <th>Empleado</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Observaciones</th>
                    <th>Precio</th>

                    <?php
                                        if($_SESSION['rol'] != "3" ){
                    
									 
									 ?>
                                     <th>Modifica</th>
                                    <th>Borra registro</th>


                                    <?php } ?>

                    
                 
                </tr>
            </thead>

            <tbody id="tbody-reservas">
            
        <?php
            include_once 'models/reserva.php';
            foreach ($this->reservas as $row) {
                $reserva = new Reserva();
                $reserva = $row;
        ?>
                <tr id="fila-<?php echo $reserva->idRESERVAS; ?>">
                    <td><?php echo $reserva->servicio;?></td>
                    <td><?php echo $reserva->Empleado;?></td>
                    <td><?php echo $reserva->Cliente; ?></td>
                    <td><?php echo $reserva->fecha; ?></td>
                    <td><?php echo $reserva->hora;?></td>
                    <td><?php echo $reserva->observaciones;?></td>
                    <td><?php echo $reserva->precio;?></td>
                    <?php
                                        if($_SESSION['rol'] != "3"){
                    
									 
									 ?>
                                                         <td><input type="button" class="btn btn-primary" onclick="window.location='<?=constant('URL') . 'consultareserva/verReserva/'. $reserva->idRESERVAS; ?>'" value="Cambia tu reserva"/></td> 
                                                        <td><button class="btn btn-danger bEliminar" data-idRESERVAS="<?php echo $reserva->idRESERVAS; ?>">Cancelar </button></td> 


                                    <?php } ?>


                    
                </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/reserva.js"></script>


  </table>
</div>
</body>
</html>