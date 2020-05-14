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
        <h1 class="center">Actualizar <?php echo $this->persona->Documento_idDocumento; ?></h1>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarPersona/" method="POST">
            <label for="">ROL</label><br>
            <input type="text" name="ROL_idROL" value="<?php echo $this->persona->ROL_idROL; ?>"><br>
            <label for="">Tipo de Documento</label><br>
            <input type="text" disabled name="Documento_idDocumento" id="" value="<?php echo $this->persona->Documento_idDocumento; ?>"><br>
            <label for="">Número de documento</label><br>
            <input type="text" disabled name="nro_documento" id="" value="<?php echo $this->persona->Documento_idDocumento; ?>"><br>
            <label for="">Nombre</label><br>
            <input type="text" name="Nombre" value="<?php echo $this->persona->Nombre; ?>"><br>
            <label for="">Apellido</label><br>
            <input type="text" name="Apellidos" value="<?php echo $this->persona->Apellidos; ?>"><br>
            <label for="">Celular</label><br>
            <input type="text" name="Celular" value="<?php echo $this->persona->Celular; ?>"><br>
            <label for="">Direccion</label><br>
            <input type="text" name="Direccion" value="<?php echo $this->persona->Direccion; ?>"><br>
            <label for="">Correo</label><br>
            <input type="text" name="Correo" value="<?php echo $this->persona->Correo; ?>"><br>
            <label for="">Usuario</label><br>
            <input type="text" name="Usuario" value="<?php echo $this->persona->Usuario; ?>"><br>
            <label for="">Contrasena</label><br>
            <input type="password" name="Contrasena" value="<?php echo $this->persona->Contrasena; ?>"><br>
            
            <input type="submit" value="Actualizar registro">
        
        </form>
        <div class="boton_consulta">
        <input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'consulta'?>'" value="volver a consulta"/>
        </div>
    </div>
 </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>