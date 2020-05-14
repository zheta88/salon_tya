<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/main.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 


    <title>Document</title>
    <style>
.row {
  opacity: 0.3;
}

.row:hover {
  opacity: 0.8;
}
</style>
</head>
<body>
<?php require 'views/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4" style="background-color:#5CACEB;padding:20px;margin-top:20px;">
        <h2 style="text-align:center;">Reporte General</h2>
        <form action="pdf/index.php" method="POST">
        <a href="pdf/index.php" style="color:red;text-align:center;text-decoration: underline;">Haz click aquí</a>
            <input type="hidden" name="mess" value=<%=n%>
        </form>
        </div>

        <div class="col-lg-4" style="background-color:#5CACEB;padding:20px;margin-top:20px;">
        <h2 style="color:black;">No. de Documento</h2>
        <form action="pdf/indexDocumento_idDocumento.php" method="POST">
        <label for="" style="color:red;">Ingresa documento:</label>
        <input type="text" name="documento">
        <div class="boton">							    
            <button type="submit " class="btn btn-success"style="margin-top:20px;" >Generar</button>
        </div>
        </form>
        
        
        </div>
        <div class="col-lg-4" style="background-color:#5CACEB;padding:20px;margin-top:20px;">
        <h2 style="color:black;">Reporte por Rol</h2>
        <form action="<?php echo constant('URL'); ?>pdf/indexrol.php" method="POST">
        <select name="ROL_idROL" id="inputState" class="form-control">
			<option selected>Elige Rol...</option>
            <option value="1">Administrador</option>
            <option value="2">Clientes</option>
            <option value="3">Empleados</option>
		</select>
        
        <div class="boton">							    
            <button type="submit " class="btn btn-success"style="margin-top:20px;" >Generar</button>
        </div>
        </form>
        
        
        
        
        </div>    
    </div>
</div>
        
<?php require 'views/footer.php'; ?>
</body>
</html>