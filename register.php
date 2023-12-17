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
                <form method="post" action="register.php" class="form">
                    <center>
                        <label for="">
                            <input type="text" placeholder="Genero" name="txtGenero"><select name="" id="">
                                <option value="">Hombre</option>
                                <option value="">Mujer</option>
                                <option value="">Otro</option>
                            </select>
                        </label>
                        <label for="">
                            <input type="text" placeholder="Nombre" name="nombre">
                        </label>
                        <label for="">
                            <input type="text" placeholder="Apellido" name="apellido">
                        </label>
                        <label for="">
                            <input type="text" placeholder="Usuario" name="txtUser">
                        </label>
                        <label for="">
                            <input type="email" placeholder="Correo electrónico" name="correoElectronicor">
                        </label>
                        <label for="">
                            <input type="password" placeholder="Contraseña" name="contraseñar">
                        </label>
                        <label for="">
                            <!-----<input type="number" placeholder="Número de teléfono" name="numUser">----->
                        </label>
                        <input type="submit" value="Registrarme" name="">
                        <a href="register.php">Regresar</a>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
    include 'conexion.php';
    /*$result = mysqli_query($conexion,$sql);*/
    /*$genero=$_POST['genero'];*/
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $user=$_POST['txtUser'];
    $emailUser=$_POST['correoElectronico'];
    $password=$_POST['contraseña'];
    /*$contactUser=$_POST['numUser'];*/
        if($nombre !=null || $apellido !=null || $user !=null || $emailUser !=null || $password !=null){ 
            $sql="insert into usuario (nombre, apellido, txtUser, correoElectronico, contraseña) values ('".$nombre."','".$apellido."','".$user."','".$emailUser."','".$password."')"; /*.$contactUser."')";*/
            if(mysqli_query($conexion, $sql)){
                echo "Cuenta creada exitosamente";
                header("location:inicio.php");
            } else{
                echo "Hay un error" .$sql. "<br>" .mysqli_error($conexion);
            }
        }
?>