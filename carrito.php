<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="css/stylecar.css">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87238b4970.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <header>
        <?php
        include_once 'header.php';
        ?>
    
        <div class="titulo">
            <h1 id="titulo">Carrito de compras</h1>
        </div>
        
    </header>
    <main>
        <div id="centro">
            <div class="ordenes" id="nomped">
                <p class="titulis">Nombre</p>
                
            </div>
            <div class="ordenes" id="presio">
                <p class="titulis">Precio</p>

            </div>
            <div class="ordenes" id="cantidad">
                <p class="titulis">Cantidad</p>
                <input type="number" min="1" max="20">
            </div>
            <div class="ordenes" id="subto">
                <p class="titulis">Subtotal</p>
                
            </div>
        </div>
        <div id="derecha">
            <p class="titulis">Totales</p>
            <p class="titulis">Totales</p>
            <p class="titulis">Subtotal</p>
            <p class="titulis">Totales</p>
            <p class="titulis">Código de Promoción</p>
            <input type="text"
        </div>
    </main>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>