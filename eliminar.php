<?php include 'conexion.php'
    $idp=$_GET['idusuario'];

    $sql="delete from usuario where id= '".$idp."'";

    $result = mysqli_query($conexion, $sql);
        header(location:perfiles-admin.php)
?>