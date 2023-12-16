<?php include ('ConexionPOO.php');
    $id= $_GET['IdUsu'];

    $sql = "delete from usuarios where IdUsu ='".$id."'";
    $result = mysqli_query($conecta, $sql);
    header("location:ListaConPOO.php");
?>