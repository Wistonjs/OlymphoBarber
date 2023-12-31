<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="editar.css">
</head>
<body>
    <div class="conexion">
        <?php include 'conexion.php';
        ?>
    </div>
    <section class="header">
        <nav>
            <body>
                <a href="inicio.html"><img src="iconos/iconoprincipal-blanco.png" alt=""></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="inicio.html">Inicio</a></li>
                        <li><a href="login.html">Agendamientos</a></li>
                        <li><a href="login.php">Usuarios</a></li>
                        <li><a href="catalogo.html">Productos</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </body>
        </nav>
        <?php
        $id=$GET['id'];
        $sql="select * from persona where id='" .$id."'";
        $result = mysqli_query($conexion, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="text-box">
            <form action="editar.php" method="post">
                <input type="hidden" name="txtid" value="<?php echo $row['id']?>"><br><br>
                <label>Usuario</label>
                <input type="text" name="txtUser" value="<?php echo $row['usuario']?>"><br><br>
                <label>Email</label>
                <input type="text" name="emailUser" value="<?php echo $row['email']?>"><br><br>
                <label>Contraseña</label>
                <input type= "" name="passUser" value="<?php echo $row['contrasenia']?>">
                <input type="submit" name="" value="Actualizar">
                <a href="perfiles_admin.php">Regresar</a> 
            </form>
            <?php } ?>
        </div>
    </section>
    </section>
</body>
</html>

<?php 
    $idp=$_POST['idusuario']
    $user=$_POST ['txtUser']
    $emailUser=$_POST['correoElectronico']
    $password=$_POST['pcontraseña']
    if($user!=null || $email !=null) {
        $sql="update ususario set txtUser='".$user."',contraseña'" .$password. "',correoElectronico'".$emailUser"' where id='".$idp."'";
        if (mysqli_query($conexion, $sql)){
            echo "Cambio realizado con exito";
            header("location:perfiles-admin.php")
        } else {
            echo "Ocurrió un error" .$sql. "<br>" . mysqli_error($conexion);
        }
    }
?>