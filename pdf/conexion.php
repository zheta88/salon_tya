<?php

$pass = "787475b9a8d0a1761af0628a0f4457a8593455032347be5d00a900b78fdf98c9";
$user = "aexfxezwrawarg";
$bd = "d1bh0aame8tlh9";
$rutaServidor = "ec2-18-233-32-61.compute-1.amazonaws.com";
$puerto = "5432";
try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$bd", $user, $pass);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
