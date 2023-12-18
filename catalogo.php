<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="catalogo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
    <header>
        <section class="header">
            <nav>
                <body>
                    <a href="inicio.php"><img src="iconos/iconoprincipal-blanco.png" alt=""></a>
                    <div class="nav-links" id="navLinks">
                        <i class="fa fa-times" onclick="hideMenu()"></i>
                        <ul>
                            <li><a href="inicio.php">Inicio</a></li>
                            <li><a href="login.php">Entrar</a></li>
                            <li><a href="agendamiento.php">Agendar</a></li>
                            <li><a href="catalogo.php">Cortes</a></li>
                        </ul>
                    </div>
                    <i class="fa fa-bars" onclick="showMenu()"></i>
                </body>
            </nav>
    </header>
    <section class="nosotros">
        <h1>Los cortes que ofrecemos</h1>
        <p>Nosotros ofrecemos todo tipo de cortes, nuestros barberos pueden realizar el corte que el 
        cliente desee mientras que de las especificaciones que quiere el cliente</p>
        <div class="row">
            <div class="nosotros-col">
                <h3>Calidad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae enim 
                    at natus ad est quidem ab sint, cumque error eaque molestias molestiae amet 
                    suscipit aspernatur maiores eligendi similique esse fugiat.</p>
            </div>
            <div class="nosotros-col">
                <h3>Sobre nosotros</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae enim 
                    at natus ad est quidem ab sint, cumque error eaque molestias molestiae amet 
                    suscipit aspernatur maiores eligendi similique esse fugiat.</p>
            </div>
        </div>
    </section>
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
</body>
</html>

.html