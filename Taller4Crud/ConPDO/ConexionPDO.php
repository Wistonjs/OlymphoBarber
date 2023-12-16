<?php
    $servidor = "localhost";
    $username ="root";
    $password = "";
    $dbname ="olympho";

        try {
            $conecta = new PDO("mysql:host=$servidor; dbname=olympho",$username,$password);
            $conecta ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion exitosa";
        } 
        catch(PDOException $e){
                echo "conexion fallida:". $e->getMessage();
        }
?>