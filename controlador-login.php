<?php 
if(!empty($_POST['btnIngresar'])) {
    if (empty($_POST['txtUser']) and empty($_POST['contraseña'])) {
        echo '<div class="alert">Debe ingresar la información para ingresar!</div>';
    } else {
        $user=$_POST["txtUser"];
        $password=$_POST["contraseña"];
        $sql=$conexion->query("select * from usuario where txtUser='$user' and contraseña='$password'");
        if ($datos=$sql->fetch_assoc()){
            header('location:inicio.php');
        } else {
            echo '<div class="denegado">Clave incorrecta</div>';
        }
    }
}
?>