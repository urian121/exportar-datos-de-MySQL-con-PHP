<?php
$ModoProduccion = true;
if ($ModoProduccion) {
    $host = "localhost";
    $usuario = "root";
    $contrasena = "";
    $base_de_datos = "bd_nextjs_mysql";
} else {
    $host = "xx.xx.xx.xx";
    $usuario = "xx";
    $contrasena = "xx";
    $base_de_datos = "bd_xx";
}

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}