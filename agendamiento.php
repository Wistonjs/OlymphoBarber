<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="agendamiento.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
<div>
    <nav>
        <body>
            <a href="inicio.html"><img src="iconos/iconoprincipal-blanco.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="inicio.html">Inicio</a></li>
                    <li><a href="login.html">Entrar</a></li>
                    <li><a href="agendamiento.html">Agendar</a></li>
                    <li><a href="catalogo.html">Cortes</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </body>
    </nav>
</div>
    <header>
        <div class="container-form login">
            <div class="informacion">
                <div class="info-childs">
                    <h2>Acá podrá agendar su corte</h2>
                    <p>Sea claro con las especificaciones del corte deseado</p>
                </div>
            </div>
            <div class="form-informacion">
                <div class="form-informacion-childs">
                    <h2>Especificaciones</h2>
                    <form class="form">
                        <p>Diga el nombre de su corte o especifíquelo</p>
                        <label for="">
                            <input type="text" placeholder="Nombre de corte" name="nombreCorte">
                        </label>
                        <p>¿Algún servicio adicional?(cejas, barba)</p>
                        <label for="">
                            <input type="text" placeholder="Servicio adicional?" name="servAd">
                        </label>
                        <label for="">
                            <p>Día deseado</p>
                            <input type="date" value="Día deseado" name="diaDese">
                        </label>
                        <input type="submit" value="Agendar">
                    </form>
                </div>
            </div>
        </div>
        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.right = "0";
            }
            function hideMenu(){
                navLinks.style.right = "-200px";
            }
        </script>
    </header>
</body>
</html>

<?php 
    $nombCor=$_POST['nombreCorte']
    $serviAd=$_POST['servAd'];
    $diaDese=$_POST['diaDese'];

        if($nombCor!=null || $serviAd !=null || $diaDese !=null) {
            $sql="Para agendar debe llenar la información! como ('".$nombCor."','".$serviAd."','".$diaDese."')";
            if(mysqli_query($conexion, $sql)){
                echo "Cuenta creada exitosamente";
                header("location:confirmación-agendamiento.php")
            } else{
                echo "Hay un error" .$sql. "<br>" .mysqli_error($conexion)
            }
        }
?>

