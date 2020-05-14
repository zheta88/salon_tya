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
        <div class="col-lg-12" style="background-color:#5CACEB;padding:20px;margin-top:20px;">
        <h2 style="text-align:center;">Reporte Empleados</h2>
        <form action="pdf/reportesempleados.php" method="POST">
        <a href="pdf/reportesempleados.php" style="color:red;text-align:center;text-decoration: underline;">Haz click aquí</a>
            <input type="hidden" name="mess" value=<%=n%>
        </form>
        </div>
        </form>
        
        
        
        
        </div>    
    </div>
</div>
        
<?php require 'views/footer.php'; ?>
</body>
</html>