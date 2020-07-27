<?php
    include_once 'models/nuevomodel.php';

    //session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin');
            break;

            case 2:
            header('location: cliente');
			break;
			case 3:
				header('location: empleado');
				break;

            default:
        }
    }   

?>
<!DOCTYPE html>
		<html>
		<head>
		    <title>sistema de login</title>
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
<link rel="stylesheet" type="text/css" href="public/css/estilo.css">
		</head>
		<body>
        <input style="position:absolute;left:1000px;" type="button" class="btn btn-info " onclick="window.location='<?=constant('URL') . 'index'?>'" value="Regresa al inicio"/>
        <div id="Contenedor">
		 <div class="Icon">
                    <!--Icono de usuario-->
                   <span class="glyphicon glyphicon-user"></span>
                 </div>
<div class="ContentForm">
    
<?php
                            if(isset($_POST['Correo']) && isset($_POST['Contrasena'])){
        $Correo = $_POST['Correo'];
        $Contrasena = md5($_POST['Contrasena']);

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM personas WHERE Correo = :Correo AND Contrasena = :Contrasena');
        $query->execute(['Correo' => $Correo, 'Contrasena' => $Contrasena]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $rol = $row[0];
            $_SESSION['rol'] = $rol;
            $_SESSION ['idPersonas'] =$row[1];

            switch($_SESSION['rol']){
                case 1:
                    header('location: admin');
                break;
    
                case 2:
                header('location: cliente');
				break;
				case 3:
					header('location: empleado');
					break;
    
                default:
            }
        }else{
            // no existe el usuario
            echo "El usuario o contraseña son incorrectos";
        }

    }
    ?>
		 	<form action="#" method="post" name="FormEntrar">
		 		<div class="input-group input-group-lg">
                 
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input type="email" class="form-control" name="Correo" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
				</div>
				<br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
				  <input type="password" name="Contrasena" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
				</div>
				<br>
				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
                <div class="opcioncontra"><a href="recupera">Olvidaste tu contraseña?</a></div>
                <hr><p><a href="nuevo" title="Create an account">Regístrate!</a>.</p>
		 	</form>
		 </div>	
         </div>
         <?php require 'views/footer.php'?>
</body>
 <!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>




							                          	
																
								       
														
							
								
	