<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "barber";

$conexion = new mysqli($server,  $user, $pass, $db);

if ($conexion->connect_error) {
    die("conexion fallida" . $conexion->$conexion->connect_error);
} else {
    echo "conectado";
}
