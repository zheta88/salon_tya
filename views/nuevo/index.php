
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
		<?php $modificar =  isset($this->persona)? true: false;?>
        <div class="container-fluid" style="text-align:center;">
            <div><?php echo $this->mensaje; ?></div>
            <div class="row">
				<div class="col-lg-12">		
					<div class="card">
						<div class="loginBox">
                            <img src="public/image/registro.jpg" class="avatar" alt="">
							<h2><?php if($modificar){echo "Modificar";}else{echo "Registro";}?></h2>
							<form action="<?php 
											$destino = constant('URL');
											if(!$modificar){$destino .= "nuevo/crear";}
											else { $destino .= "consulta/actualizarPersona/";}
											echo $destino;
											?>" method="POST">
                            <div class="form-group">									
                            
									   <?php
									   	require_once "models/nuevomodel.php";
										 $nuevomodel=new nuevomodel();
										 $opcionesDocumento= $nuevomodel->getdocumento();
										 //var_dump($this->persona);
									 	?>

                                        <select name="Documento_idDocumento" id="inputState" class="form-control">
										
                                            <option selected>Elige Tipo de documento...</option>
											<?php foreach ($opcionesDocumento as $elemento){
											echo '<option value="'.$elemento['iddocumento'].'"';
											if($modificar && $this->persona->Documento_idDocumento == $elemento['iddocumento']){
												echo " SELECTED";
											}
											echo '>'.$elemento['tipodedocumento'].'</option>';
											 }?>
                                           


                                        </select>
                                            
							</div>
							
							
							
							
							<div class="form-group">									
									<input type="text" class="form-control input-lg" 
									name="nro_documento" placeholder="Número de documento" value="<?php if($modificar){echo $this->persona->nro_documento;}?>"  required>
								</div> 
                         	
								<div class="form-group">									
                            
									   <?php
										 $nuevomodel=new nuevomodel();
										 $opcionesRoles= $nuevomodel->getroles(); 
										//var_dump($opcionesRoles); 
									 
									 ?>

                                        <select name="rol_idrol" id="inputState" class="form-control">
										
                                            <option selected>Elige Rol...</option>
											<?php foreach ($opcionesRoles as $elemento){
											echo '<option value="'.$elemento['idrol'].'"';
											if($modificar && $this->persona->ROL_idROL == $elemento['idrol']){
												echo " SELECTED";
											}
											echo '>'.$elemento['nombre_rol'].'</option>';
											 }?>
                                           


                                        </select>
                                           
								</div> 
                         	
								<div class="form-group">									
									<input type="text" class="form-control input-lg" name="Nombre" placeholder="Nombres" value="<?php if($modificar){echo $this->persona->Nombre;}?>" required>        
								</div>							
								<div class="form-group">        
									<input type="text" class="form-control input-lg" name="Apellidos" placeholder="Apellidos"value="<?php if($modificar){echo $this->persona->Apellidos;}?>" required>       
								</div>
								<div class="form-group">									
									<input type="text" class="form-control input-lg" name="Celular" placeholder="Celular" value="<?php if($modificar){echo $this->persona->Celular;}?>" required>        
								</div> 
                         	
								<div class="form-group">									
									<input type="text" class="form-control input-lg" name="Direccion" placeholder="Direccion" value="<?php if($modificar){echo $this->persona->Direccion;}?>" required>        
								</div> 
                         	
								<div class="form-group">									
									<input type="email" class="form-control input-lg" name="Correo" placeholder="E-mail" value="<?php if($modificar){echo $this->persona->Correo;}?>"required>        
								</div>	
								<div class="form-group">									
									<input type="text" class="form-control input-lg" name="Usuario" placeholder="Usuario" value="<?php if($modificar){echo $this->persona->Usuario;}?>" required>        
								</div>						
								<div class="form-group">        
									<input type="password" class="form-control input-lg" name="Contrasena" placeholder="Contraseña" <?php if(!$modificar){echo "required";}?>>
								</div>
								<div class="boton">							    
									<button type="submit" class="btn btn-success btn-block">
										<?php if(!$modificar){echo "Registrar";}else {echo "Modificar";}?>
									</button>
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