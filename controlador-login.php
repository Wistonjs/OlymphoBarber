<?php 
if(!empty($_POST['btnIngresar'])) {
    if (empty($_POST['txtUser']) and empty($_POST['passUser'])) {
        echo "<div class="alert">Debe ingreesar la información para ingresar!</div>";
    } else {
        $user=$_POST["txtUser"];
        $password=$_POST["passUser"];
        $userAdmin=$_POST["txtUser"];
        $passAdmin=$_POST["passUser"];
        $sql=$conexion->query("select * from usuario where txtUser='$user' and passUser='$password'");
        $sqlAd=$conexion->query("select * from administrador where txtUser='$userAdmin' and passUser='$passAdmin'")
        if ($datosAdmin=$sqlAd->fetch_object()){
            header('location:inicio-admin');
        }
        if ($datos=$sql->fetch_object()){
            header('location:inicio.php');
        } else {
            echo '<div class="denegado">Clave incorrecta</div>';
        }
    }
    
}
?>