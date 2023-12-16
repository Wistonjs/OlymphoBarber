<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympho Barber Club</title>
    <link rel="stylesheet" href="inicio.css">
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
                    <ul>
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="login.php">Entrar</a></li>
                        <li><a href="agendamiento.php">Agendar</a></li>
                        <li><a href="catalogo.php">Cortes</a></li>
                        <li><a href="controlador-cerrar-sesion.php">Cerrar sesión</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </body>
        </nav>
        <div class="text-box">
            <h1>Sobre nosotros</h1>
            <p>Somos una barbería que se ubica en Santo Domingo-Ciudad bolivar y busca seguir creciendo, puedes venir, hay un mirador que queda cerca de nosotros, no es peligroso 
                como imaginas
                 nuestros barbero cumplen con calidad y respeto a sus clientes, buscamos siempre mejorar, puedes jugar juegos clásicos en un espacio que pueden usar los clientes
                 que reservaron su corte, siempre te recibiremos de buena forma.</p>
            <p>Somos reconocidos por que los primeros barberos eran amigos de una gran parte de personas en nuestro sector, mostraron un grán talento y gracias a esto el número de 
                clientes creció demasiado. Esto hizo que crearamos esta página web para que puedas agendar un corte que especifiques y también agregando servicios adiionales como 
                corte de barba o cejas, esperamos que te sirva demasiado y que vuelvas a agendar cortes en esta página ya que nos serviría mucho para seguir creciendo.</p>
            <a href="agendamiento.php" class="hero-btn">Agende ahora mismo</a>
        </div>
    </section>
    <section class="nosotros">
        <h1>Los cortes que ofrecemos</h1>
        <p>Nosotros ofrecemos todo tipo de cortes populares, clásicos o el que más te guste, nuestros barberos pueden realizar el corte que el 
        cliente desee mientras que de las especificaciones que quiere el cliente sin embargo cumplimos con 2 fundamentos especificos para atender a nuestros clientes.</p>
        <div class="row">
            <div class="nosotros-col">
                <h3>Calidad</h3>
                <p>Siempre daremos lo mejor de nosotros mientras se realiza un corte, siempre se intentará terminar y entregar el corte como nos especificó nuestro cliente
                    sin faltar detalles.
                </p>
            </div>
            <div class="nosotros-col">
                <h3>Tranquilidad</h3>
                <p>Si se hace algo sin paciencia quedará mal y por consecuencia tendremos malos resultados y nos afectaría... Por eso siempre haremos un corte con tranquilidad, 
                    nos tomaremos un tiempo pero no te decepcionaremos.</p>
            </div>
        </div>
    </section>
    <section class="agenda">
        <h1>Acá podrá agendar su corte</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde vero magni nihil. Qui 
            iure nesciunt aut consectetur maxime incidunt quia aspernatur cumque ad facere 
            laborum ex, quas molestiae eius blanditiis?</p>
            <div class="row">
                <div class="agenda-col">
                    <a href="#"></a><img src="imagenes/img-hombre-agendando.jpg"></a>
                    <div class="layer">
                        <a href="#"><h3>Agende su corte</h3></a>
                    </div>
                </div>
                <div class="agenda-col">
                    <a href="#"><img src="imagenes/img-hombre-producto.jpg"></a>
                    <div class="layer">
                        <a href="#"><h3>Compre productos</h3></a>
                    </div>
                </div>
                <div class="agenda-col">
                    <a href="#"></a><img src="imagenes/img-hombre-barbero.jpg"></a>
                    <div class="layer">
                        <a href="#"><h3>Trabaje con nosotros</h3></a>
                    </div>
                </div>
            </div>
    </section>
    <!-----<section class="sobrenos">
        <h1>Sobre nosotros</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Quibusdam eius molestias, placeat ea minus ipsam quaerat
             et sed voluptates, tempore maxime voluptate nulla fugit 
             labore accusamus? Magnam officiis impedit laboriosam?</p>
             <div class="row">
                <div class="sobrenos-col">
                    <img src="imagenes/img-grupo-barberos.jpg" alt="">
                    <h3>Nuestros logros</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                         Libero accusantium, tempora explicabo quidem excepturi consequatur,
                          harum velit nam quae officia voluptates deserunt exercitationem
                         error? Aperiam odio ratione nisi doloribus tenetur!</p>
                </div>
             </div>
             <div class="row">
                <div class="sobrenos-col">
                    <img src="imagenes/img-barberia-llena.jpg" alt="">
                    <h3>Nuestros logros</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                         Libero accusantium, tempora explicabo quidem excepturi consequatur,
                          harum velit nam quae officia voluptates deserunt exercitationem
                         error? Aperiam odio ratione nisi doloribus tenetur!</p>
                </div>
             </div>
    </section> ------>
    <section class="comentarios">
        <h1>Lo que dicen nuestros clientes</h1>
        <div class="row">
            <div class="comentarios-col">
                <img src="imagenes/img-cliente1.jpg" alt="">
                <div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <h3>Andrés Lasprilla</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="comentarios-col">
                <img src="imagenes/img-cliente2.jpg" alt="">
                <div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <h3>Sebastián Muñoz</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="contactenos">
        <h1>Contactenos en caso de que tenga algún problema con su producto</h1>
        <a href="" class="hero-btn">Contactar</a>
    </section>
    <!-----JavaScript para menu responsive----->
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