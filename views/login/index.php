<?php
    include_once 'models/nuevomodel.php';

    session_start();

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

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/login.scss">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/main.css">
  </head>

  <body>
	  <?php require 'views/header.php'?>
	  
		<div class="container-fluid" style="text-align:center;">
		<ul class="menuinicio" style="text-align:left; color:red;" >
		
        </ul>
			<div class="row">
				<div class="col-lg-12">		
					<div class="card">
						<div class="loginBox">
							<img src="public/image/login2.png" class="avatar" alt="">
							<h2>Login</h2>
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

							<form action="#" method="post">                           	
								<div class="form-group">									
									<input type="email" class="form-control input-lg" name="Correo" placeholder="Email" required>        
								</div>							
								<div class="form-group">        
									<input type="password" class="form-control input-lg" name="Contrasena" placeholder="Password" required>       
								</div>
								
								</div> 
								<div class="boton">							    
									<button type="submit" class="btn btn-success btn-block">Ingresa</button>
									<hr><p><a href="nuevo" title="Create an account">Regístrate!</a>.</p>
                                    <hr><p><a href="recupera" title="recuperar contraseña">Olvidaste la contraseña?</a>.</p>
                

								</div>
								
						
							
								</div>

					  			 </div>
							
							
							</form>
							<!-- Collapse a form when user click Lost your password? link-->
							
							</div>														
						</div><!-- /.loginBox -->	
					</div><!-- /.card -->
				</div><!-- /.col -->
			</div><!--/.row-->
		</div><!-- /.container -->
		<?php require 'views/footer.php'?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
        <script src="public/js/login.js" integrity=""></script>
        
	</body>
    
</html>	