<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrese</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="conexion">
        <?php include 'conexion.php';
        $sql = 'select * from usuario';
        $result = mysqli_query($conexion,$sql);
        ?>
    </div>
    <div class="container-form register">
        <div class="informacion">
            <div class="info-childs">
                <h2>Bienvenido a Olympho Barber Club</h2>
                <p>Para disfrutar de poder agendar o comprar productos en nuestra 
                página por favor inicia sesión con los siguientes datos solicitados</p>
                <a href="login.php"><input type="button" value="Iniciar sesión" id="sign-in"></a>
            </div>
        </div>
        <div class="form-informacion">
            <div class="form-informacion-childs">
                <h2>Crear una cuenta</h2>
                <p>Usa tu e-mail para registrarte</p>
                <form method="post" action="agregar.php" class="form">
                    <center>
                        <label for="">
                            <input type="text" placeholder="Nombre" name="txtNombre">
                        </label>
                        <label for="">
                            <input type="text" placeholder="Apellido" name="txtApellido">
                        </label>
                        <label for="">
                            <input type="text" placeholder="Usuario" name="txtUser">
                        </label>
                        <label for="">
                            <input type="email" placeholder="Correo electrónico" name="emailUser">
                        </label>
                        <label for="">
                            <input type="password" placeholder="Contraseña" name="passUser">
                        </label>
                        <label for="">
                            <input type="number" placeholder="Número de teléfono" name="numUser">
                        </label>
                        <input type="submit" value="Registrarme" name="">
                        <a href="register.php">Regresar</a>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>

<?php 
    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];
    $user=$_POST['txtUser'];
    $emailUser=$_POST['emailUser'];
    $password=$_POST['passUser'];
    $contactUser=$_POST['numUser'];

        if($nombre !=null || $apellido !=null || $user !=null || $emailUser !=null || $password || $contactUser !=null) {
            $sql="Inserte los datos que se necesitan para poder registrarse existosamente
            (Nombre, Apellido, Usuario, Email, Contraseña, Número de contacto) values ('".$nombre."','"$apellido"','".$user."','"$emailUser"','".$password."','"$contactUser"')";
            if(mysqli_query($conexion, $sql)){
                echo "Cuenta creada exitosamente";
                header("location:perfiles-admin.php")
            } else{
                echo "Hay un error" .$sql. "<br>" .mysqli_error($conexion)
            }
        }
?>