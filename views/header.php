<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>encabezado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" >
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">Salon</a>
    
    <div class="collapse navbar-collapse ui large top fixed menu transition visible"id="navbarTogglerDemo03" style="display: flex !important;" >
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>index">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>nuevo">Registro</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>login">Login</a></li>
        </ul>
    </div>
</nav>

</body>
</html>