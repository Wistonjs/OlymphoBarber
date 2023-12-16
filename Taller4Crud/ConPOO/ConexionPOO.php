<?php
    $servidor = "localhost";
    $username ="root";
    $password = "";
    $dbname ="olympho";

    $conecta = new mysqli($servidor,$username,$password,$dbname);
        if ($conecta->connect_error){
            die("Connection failed: " . $conecta->connect_error);
        }
            echo "conectado pa";
?>