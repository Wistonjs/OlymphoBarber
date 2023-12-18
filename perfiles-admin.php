<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="perfiles-admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
    <div class="conexion">
        <?php include 'conexion.php';
        $sql = 'select * from usuario';
        $result = mysqli_query($conexion,$sql);
        ?>
    </div>
    <section class="header">
        <nav>
            <body>
                <a href="inicio.php"><img src="iconos/iconoprincipal-blanco.png" alt=""></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="login.php">Agendamientos</a></li>
                        <li><a href="login.php">Usuarios</a></li>
                        <li><a href="catalogo.php">Productos</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </body>
        </nav>
        <div class="text-box">
            <h1>Perfiles de usuarios de la barbería</h1>
            <p>En el siquiente archivo encontrará toda la información de todos los usuarios registrados en la barbería.</p>
            <p>Puede editar o eliminar datos de los usuarios</p>
            <p>Acuerdese que los datos se manipulan de manera RESPONSABLE</p>
            <!-----<a href="agendamiento.php" class="hero-btn">Agende ahora mismo</a>------->
            <div class="datos">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Teléfono</th>
                            <th>Correo electrónico</th>
                            <th>Contraseña</th>
                        </tr>
                    </thead>
                    <TBody>
                            <?php 
                            while($row = $result -> fetch_assoc()){
                            ?>
                        <tr>
                            <td type= "hidden"><?php echo $row['idusuario'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['numeroTelefono'] ?></td>
                            <td><?php echo $row['correoElectronico'] ?></td>
                            <td><?php echo $row['contraseña'] ?></td>
                            <td>
                                <a href="register.php">Agregar</a>
                                <a href="editar.php?idusuario=<?php echo $row['idusuario'] ?>">Editar</a>
                                <a href="eliminar.php?idusuario=<?php echo $row['idusuario'] ?>">Eliminar</a> <?php echo "<br>" ?>
                            </td>
                        </tr>
                        <?php } mysqli_close($conexion) ?>
                    </TBody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>