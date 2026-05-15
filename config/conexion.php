<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "inventario_emedical";

$conexion = mysqli_connect($host, $usuario, $password, $bd);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>