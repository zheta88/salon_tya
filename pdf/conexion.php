<?php
	
	$pgsql = new pgsql('ec2-18-233-32-61.compute-1.amazonaws.com', 'aexfxezwrawarg', '787475b9a8d0a1761af0628a0f4457a8593455032347be5d00a900b78fdf98c9', 'd1bh0aame8tlh9');
	
	if($pgsql->connect_error){
		
		die('Error en la conexion' . $pgsql->connect_error);
		
	}
?>