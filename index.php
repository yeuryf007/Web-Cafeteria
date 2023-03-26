<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="css/stylehome.css">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87238b4970.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="topbar">    
            <div class="logo">Logo Empresa</div>
            <nav class="nav" id="navgen">
            <a href="index.php"><button class="boton1">Home</button></a>
            <a href="reservas.php"><button class="boton1">Reservas</button></a>
            <a href="menu.php"><button class="boton1">Menú</button></a>
            <a href="miperfil.php"><button class="boton1">Mi perfil</button></a>
            <!--
                el enlace del boton de ingreso se pega al boton de carrito, hay que hacerle hide al boton de carrito hasta que alguien ingrese
            -->
            <a class="a-button" href="ingreso.php">
                <button class="boton2">
                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                    Ingreso 
                </button>
            </a>
            <a class="a-button" href="carrito.php">
                <button class="boton2">
                    <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                    Carrito
                </button>
            </a>
            </nav>
        </div>
        <div class="titulo">
            <h1>Cafeteria Deluxe</h1>
            <p>La vida es como una taza de café... Tú eliges si Io quieres dulce o amargo, frío o caliente, solo o acompañado.</p>
            <a class="a-button" href="menu.php"><button class="boton3">Menú</button></a>
            <a class="a-button" href="reservas.php"><button class="boton3">Reservas</button></a>
        </div>
    </header>
    <main>
        <img id="mostrador" src="imagenes/mostrador-cafeteria.jpg" alt=""></img>
            
        <div>
            <h2>Acerca de<img id="granos" src="imagenes/granos.png" alt=""></img></h2>
            
            <p>Bienvenido a xd cafe, su lugar favorito para disfrutar de comida deliciosa y fresca en un ambiente acogedor. Estamos dedicados a proporcionar a nuestros clientes comidas de alta calidad que sean nutritivas y satisfactorias. <br><br> En xd cafe, creemos que la comida debe ser deliciosa y saludable. Es por eso que obtenemos nuestros ingredientes de granjas y proveedores locales siempre que sea posible, y hacemos todo desde cero en nuestra cocina. Nuestro menú cambia regularmente para reflejar las estaciones y mostrar los mejores ingredientes disponibles.</p>
        </div>
    </main>
</body>
    <footer>
        <div>
            <h2>Visitanos aquí</h2>
            <!--Introducier google maps o imagen de ubicacion-->
        </div>
        <nav>
            <h3>Navegación</h3> 
            <a href="index.php">Home</a>
            <a href="reservas.php">Reservas</a>
            <a href="menu.php">Menú</a>
            <a href="miperfil.php">Mi perfil</a>
        </nav>
        <div>
            <h3>Contacto</h3>
            <a href=""><i class="fa-solid fa-envelope" style="color: #ffffff;"></i> Correo@correo.com</a>
            <p><i class="fa-solid fa-phone" style="color: #ffffff;"></i> 123456789</p>
            <p><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Calle freidy el profe, #el final</p>
        </div>
        <div>
            <h3>Redes sociales</h3>
            <a href=""><i class="fa-brands fa-square-facebook" style="color: #ffffff;"></i></a>
            <a href=""><i class="fa-brands fa-square-instagram" style="color: #ffffff;"></i></a>
            <a href=""><i class="fa-brands fa-square-twitter" style="color: #ffffff;"></i></a>
        </div>
    </footer>
</html>