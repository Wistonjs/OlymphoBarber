<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "Olymphe";

$conexion = new mysqli($server,  $user, $pass, $db);

if ($conexion->connect_error) {
    die("conexion fallida" . $conexion->$conexion->connect_error);
} else {
    echo "conectado";
}
