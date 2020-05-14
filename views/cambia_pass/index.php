<?php
$token = trim(stripslashes($_GET['token']));
$mensaje = "";

if(isset($_POST['Contrasena'])){
	$contrasena = trim(stripslashes($_POST['Contrasena']));
	$confContrasena = trim(stripslashes($_POST['Con_contrasena']));
	if($contrasena === $confContrasena){
		// Se actualiza la contraseña
		require_once 'models/nuevomodel.php';
		$nuevoModel = new NuevoModel();
		$cantidadRegsActualizados = $nuevoModel->updateContrasena($contrasena,$token);
		if($cantidadRegsActualizados === 0){
			$mensaje = "No fue posible actualizar la contraseña!";
		} else if($cantidadRegsActualizados > 0) {
			$mensaje = "La contraseña fue actualizada correctamente!";
		}
	} else {
		// Se le notifica al usuario que las contraseñas no coinciden
		$mensaje = "Las contrase&ntilde;as no coinciden!";
	}
}
?>
<html>
	<head>
		<title>Cambiar Password</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">

		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Cambiar Password</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="login">Iniciar Sesi&oacute;n</a></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<form id="loginform" class="form-horizontal" role="form" action="cambia_pass?token=<?php echo $token?>" method="POST" autocomplete="off">
							
							<input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />
							
							<input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Nuevo Password</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="Contrasena" placeholder="Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Confirmar Password</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="Con_contrasena" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Modificar</a>
								</div>
							</div>   
						</form>
						<span style="color:red"><?php echo $mensaje?></span>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>