<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container-form login">
        <div class="informacion">
            <div class="info-childs">
                <h2>Bienvenido a Olympho Barber Club</h2>
                <p>Si aún no ha creado su cuenta registrese aquí</p>
                <a href="register.php"><input type="button" value="Registrarme" id="sign-up"></a>
            </div>
        </div>
        <div class="form-informacion">
            <div class="form-informacion-childs">
                <h2>Iniciar sesion</h2>
                <p>Inicie sesión con su cuenta</p>
                <form class="form" method="post">
                <div class="conexion">
                    <?php include 'conexion.php';
                    include 'controlador-login.php';
                    $sql = 'select * from usuario';
                    $result = mysqli_query($conexion,$sql);
                    ?>
                </div>
                    <label for="">
                        <input type="text" placeholder="usuario" name="txtUser">
                    </label>
                    <label for="">
                        <input type="password" placeholder="Contraseña" name="contraseña">
                    </label>
                    <input type="submit" value="Iniciar sesion" name="btnIngresar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>