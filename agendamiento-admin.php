<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamientos</title>
    <link rel="stylesheet" href="agendamiento-admin.css">
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
                <a href="inicio.html"><img src="iconos/iconoprincipal-blanco.png" alt=""></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="inicio.html">Inicio</a></li>
                        <li><a href="agendamiento-admin.html">Agendamientos</a></li>
                        <li><a href="perfiles-admin.php">Usuarios</a></li>
                        <li><a href="catalogo.html">Productos</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </body>
        </nav>
        <div class="text-box">
            <h1>Agendamientos de usuarios de la barbería</h1>
            <p>En la siguiente tabla encontrará toda la información de todos los agendamientos registrados en la barbería.</p>
            <p>Puede editar o eliminar datos de los agendamientos</p>
            <p>Acuerdese que los datos se manipulan de manera RESPONSABLE</p>
            <div class="datos">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Corte requerido</th>
                            <th>Compra de productos</th>
                            <th>Servicio adicional</th>
                            <th>Fecha agendamiento</th>
                        </tr>
                    </thead>
                    <TBody>
                            <?php 
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <tr>
                            <th type="hidden"><?php echo $row['idusuario']?></th>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['apellido']?></td>
                            <!-----<td><?php echo $row['reqCorte']?></td>------>
                            <!-----<td><?php echo $row['compraPro']?></td>------>
                            <!-----<td><?php echo $row['servAd']?></td>------>
                            <!-----<td><?php echo $row['fechAg']?></td>------>
                            <td>
                                <a href="register.php">Agregar</a>
                                <a href="editar.php?id=<?php echo $row['idusuario']?>">Editar</a>
                                <a href="eliminar.php?id=<?php echo $row['idusuario']?>">Eliminar</a> <?php echo "<br>" ?>
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