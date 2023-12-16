<?php include ('ConexionPro.php');
    $id= $_GET['IdUsu'];

    $sql = "delete from usuarios where IdUsu ='".$id."'";
    $result = mysqli_query($connect, $sql);
    header("location:ListaConPro.php");
?>