<?php
include ()
session_start();

if(isset($_SESSION['txtUser'])){
    echo"su sesión existe";
    session_destroy();
    header('location:login.php ';)
}
?>