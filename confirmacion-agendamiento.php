<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su agendamiento fué asignado</title>
    <link rel="stylesheet" href="confirmacion-agendamiento.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
<section class="header">
        <nav>
            <body>
                <a href="inicio.php"><img src="iconos/iconoprincipal-blanco.png" alt=""></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="login.php">Entrar</a></li>
                        <li><a href="agendamiento.php">Agendar</a></li>
                        <li><a href="catalogo.php">Cortes</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </body>
        </nav>
        <div class="text-box">
            <h1>¡Confirmamos su agendamiento!</h1>
            <p>¡Su agendamiento fué asignado!.</p>
            <p>Puede seguir disfrutando de nuestra página web.</p>
            <a href="inicio.php" class="hero-btn">Volver a inicio</a>
        </div>
    </section>
</body>
</html>