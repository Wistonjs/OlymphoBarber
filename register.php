<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrese</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
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
                <form class="form">
                    <label for="">
                        <input type="text" placeholder="Nombre">
                    </label>
                    <label for="">
                        <input type="text" placeholder="Apellido">
                    </label>
                    <label for="">
                        <input type="email" placeholder="Correo electrónico">
                    </label>
                    <label for="">
                        <input type="password" placeholder="Contraseña">
                    </label>
                    <label for="">
                        <input type="number" placeholder="Número de teléfono">
                    </label>
                    <input type="submit" value="Registrarme">
                </form>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>