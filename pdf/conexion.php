<?php
$usuario='aexfxezwrawarg';
$pass='787475b9a8d0a1761af0628a0f4457a8593455032347be5d00a900b78fdf98c9';
$host='ec2-18-233-32-61.compute-1.amazonaws.com';
$bd='d1bh0aame8tlh9';

    function conectar_PostgreSQL( $usuario, $pass, $host, $bd )
    {
         $conexion = pg_connect( "user=".$usuario." ".
                                "password=".$pass." ".
                                "host=".$host." ".
                                "dbname=".$bd
                               ) or die( "Error al conectar: ".pg_last_error() );
        return $conexion;
    }
?>
