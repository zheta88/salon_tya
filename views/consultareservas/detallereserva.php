<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

    <?php require 'views/header.php'; ?>
<div class="container-fluid" style="text-align:center;">
    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Actualizar <?php echo $this->reserva->servicio; ?></h1>
          
        <form action="<?php echo constant('URL'); ?>consultareserva/actualizarReserva/" method="POST">
            <label for="">Servicio</label><br>
            <!--<input type="text" name="SERVICIOS_idSERVICIOS" value="<?php echo $this->reserva->servicio; ?>"><br>-->
            <select>
                <option value="1" <?php echo $this->reserva->servicio=="1"?"SELECTED":""; ?>>PEDICURE</option>
                <option value="2" <?php echo $this->reserva->servicio=="2"?"SELECTED":""; ?>>MANICURE</option>
                <option value="3" <?php echo $this->reserva->servicio=="3"?"SELECTED":""; ?>>CORTE CABELLO</option>
                <option value="4" <?php echo $this->reserva->servicio=="4"?"SELECTED":""; ?>>TINTURA</option>
                <option value="5" <?php echo $this->reserva->servicio=="5"?"SELECTED":""; ?>>PEINADO</option>
                <option value="6" <?php echo $this->reserva->servicio=="6"?"SELECTED":""; ?>>CORTE CABELLO 2</option> 
            </select><br>
            <label for="">Empleado</label><br>
            <input type="text" disabled name="Cliente" id="" value="<?php echo $this->reserva->Cliente; ?>"><br>
            <label for="">Cliente</label><br>
            <input type="text" name="Empleado" value="<?php echo $this->reserva->Empleado; ?>"><br>
            <label for="">Fecha</label><br>
            <input type="text" name="Fecha" value="<?php echo $this->reserva->fecha; ?>"><br>
            <label for="">Hora</label><br>
            <input type="text" name="Hora" value="<?php echo $this->reserva->hora; ?>"><br>
            <label for="">Observaciones</label><br>
            <input type="text" name="Observaciones" value="<?php echo $this->reserva->observaciones; ?>"><br>
            <label for="">Precio</label><br>
            <input type="text" name="Precio" value="<?php echo $this->reserva->precio; ?>"><br>
            
            
            <input type="submit" value="Actualizar registro">
        
        </form>
        <div class="boton_consulta">
        <input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consultareserva'?>'" value="volver a consulta"/>
        </div>
    </div>
 </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>