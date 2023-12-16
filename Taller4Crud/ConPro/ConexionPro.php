<?php
    $servidor = "localhost";
    $username ="root";
    $password = "";
    $dbname = "olympho";

    $connect = mysqli_connect($servidor,$username,$password,$dbname);
        if (!$connect){
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
            echo "conectado pa";
        }
?>