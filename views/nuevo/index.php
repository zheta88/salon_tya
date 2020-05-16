
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">
    
    <title>Registro</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

        <div class="container-fluid" style="text-align:center;">
            <div><?php echo $this->mensaje; ?></div>
            <div class="row">
				<div class="col-lg-12">		
					<div class="card">
						<div class="loginBox">
                            <img src="public/image/registro.jpg" class="avatar" alt="">
							<h2>Registro</h2>
                            <form action="<?php echo constant('URL'); ?>nuevo/crear" method="POST">
                            <div class="form-group">									
                            
									   <?php
										 $nuevomodel=new nuevomodel();
										 $opcionesDocumento= $nuevomodel->getdocumento(); 
									 	?>

                                        <select name="Documento_idDocumento" id="inputState" class="form-control">
										
                                            <option selected>Elige Tipo de documento...</option>
											<?php foreach ($opcionesDocumento as $elemento){
                                            echo '<option value="'.$elemento['idDocumento'].'">'.$elemento['TipodeDocumento'].'</option>';
											 }?>
                                           


                                        </select>
                                            
							</div>
							
							
							
							
							<div class="form-group">									
									<input type="text" class="form-control input-lg" name="nro_documento" placeholder="Número de documento" required>        
								</div> 
                         	
								<div class="form-group">									
                            
									   <?php
										 $nuevomodel=new nuevomodel();
										 $opcionesRoles= $nuevomodel->getroles(); 
										//	 var_dump($opcionesRoles); 
									 
									 ?>

                                        <select name="ROL_idROL" id="inputState" class="form-control">
										
                                            <option selected>Elige Rol...</option>
											<?php foreach ($opcionesRoles as $elemento){
                                            echo '<option value="'.$elemento['idROL'].'">'.$elemento['NOMBRE_ROL'].'</option>';
											 }?>
                                           


                                        </select>
                                           
								</div> 
                         	
								<div class="form-group">									
									<input type="text" class="form-control input-lg" name="Nombre" placeholder="Nombres" required>        
								</div>							
								<div class="form-group">        
									<input type="text" class="form-control input-lg" name="Apellidos" placeholder="Apellidos" required>       
								</div>
								<div class="form-group">									
									<input type="text" class="form-control input-lg" name="Celular" placeholder="Celular" required>        
								</div> 
                         	
								<div class="form-group">									
									<input type="text" class="form-control input-lg" name="Direccion" placeholder="Direccion" required>        
								</div> 
                         	
								<div class="form-group">									
									<input type="email" class="form-control input-lg" name="Correo" placeholder="E-mail" required>        
								</div>	
								<div class="form-group">									
									<input type="text" class="form-control input-lg" name="Usuario" placeholder="Usuario" required>        
								</div>						
								<div class="form-group">        
									<input type="password" class="form-control input-lg" name="Contrasena" placeholder="Contraseña" required>       
								</div>
								<div class="boton">							    
									<button type="submit" class="btn btn-success btn-block">Registrar</button>
								</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>