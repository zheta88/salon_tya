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
            <div class="boton_nuevo">
        <input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'nuevo'?>'" value="Nuevo Registro"/>
        <a href="reporte">

            <img src="public/image/pdf.png" style="width:40px;">

            </a>
        </div>
       
                <tr>
                    <th>Rol</th>
                    <th>Tipo de Documento</th>
                    <th>Número de Documento</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Celular</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Modifica</th>
                    <th>Borra registro</th>
                 
                </tr>
            </thead>

            <tbody id="tbody-personas">
            
        <?php
            include_once 'models/persona.php';
            foreach ($this->personas as $row) {
                $persona = new Persona();
                $persona = $row;
        ?>
                <tr id="fila-<?php echo $persona->nro_documento; ?>">
                    <td><?php echo $persona->ROL_idROL;?></td>
                    <td><?php echo $persona->Documento_idDocumento; ?></td>
                    <td><?php echo $persona->nro_documento; ?></td>
                    <td><?php echo $persona->Nombre; ?></td>
                    <td><?php echo $persona->Apellidos; ?></td>
                    <td><?php echo $persona->Celular;?></td>
                    <td><?php echo $persona->Direccion;?></td>
                    <td><?php echo $persona->Correo;?></td>
                    <td><?php echo $persona->Usuario;?></td>
                    <td><?php echo $persona->Contrasena;?></td>
                    <td><input type="button" class="btn btn-primary" onclick="window.location='<?=constant('URL') . 'consulta/verPersona/'. $persona->nro_documento; ?>'" value="Actualizar"/></td> 
                    <td><button class="btn btn-danger bEliminar" data-nro_documento="<?php echo $persona->nro_documento; ?>" >Eliminar</button></td>
                </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>


  </table>
</div>
</body>
</html>