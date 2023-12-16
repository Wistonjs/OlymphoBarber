<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EditarPro</title>
    </head>
    <body>
        <?php include ("ConexionPro.php");
            $id=$_GET['IdUsu'];
            $sql="select * from  usuarios where IdUsu ='".$id."'";
            $result = mysqli_query($connect,$sql);

            while($row = mysqli_fetch_assoc($result)){
        ?>
        <div>
            <form method="post" action="EditarPro.php">
                <input type="hidden" name="IdUsu" value="<?php echo $row['IdUsu']?>"><br><br>
                <label>Usuario</label>
                <input type="text" name="NombreUsu" value="<?php echo $row['NombreUsu']?>"><br><br>
                <label>Correo</label>
                <input type="text" name="CorreoUsu" value="<?php echo $row['CorreoUsu']?>"><br><br>
                <label>Contraseña</label>
                <input type="text" name="ContraseñaUsu" value="<?php echo $row['ContraseñaUsu']?>"><br><br>
                <input type="submit" name="BtnEditarPro">
                <button><a href="ListaConPro.php">regresar</a></button>
            </form>
            <?php } ?>
        </div>
    </body>
</html>
<?php
    $idp=$_POST['IdUsu'];
    $User=$_POST['NombreUsu'];
    $Email=$_POST['CorreoUsu'];
    $Password=$_POST['ContraseñaUsu'];
        if ($user!=null||$Email!=null||$Password!=null) {
            $sql="update usuarios SET NombreUsu='".$User."',CorreoUsu='".$Email."',ContraseñaUsu='".$Password."' where IdUsu='".$idp."'";
            if($connect->query($sql)=== true){
                echo "Datos correctamente actualizados";
                header("location:ListaConPro.php");

            }
        else {
            echo "Error:". $sql."<br>". $connect->error;
        }

    }
?>
