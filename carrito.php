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
        <?php
        include_once 'header.php';
        ?>
        <div class="titulo">
            <?php
                if (isset($_SESSION["user"])) {
                    echo "<p id='usunom'>Bienvenido " . $_SESSION["user"]."</p>";
                }
            ?>
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
    <?php
    include_once 'footer.php';
    ?>
</html>