<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="css/stylemenu.css">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87238b4970.js" crossorigin="anonymous"></script>
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
            <h1>Menú</h1>
            <h2><a href="ordenar.php">Ordenar</a></h2>
        </div>
        
    </header>
    <main>
        <div class="table">
        <ul>
            <li>
                <h2>Entradas</h2>
                <ul>
                    <li>Ensalada de tomate y cebolla</li>
                    <li>Ensalada de col y zanahoria</li>
                    <li>Ensalada de lechuga y pepino</li>
                    <li>Ensalada de espinaca y aguacate</li>
                    <li>Ensalada de lechuga y tomate</li>
                </ul>
            </li>
            <li>
                <h2>Platos fuertes</h2>
                <ul>
                    <li>Pollo a la plancha</li>
                    <li>Carne asada</li>
                    <li>Filete de pescado</li>
                    <li>Chuleta de cerdo</li>
                    <li>Chuleta de res</li>
                </ul>
            </li>
            <li>
                <h2>Postres</h2>
                <ul>
                    <li>Brownie de chocolate</li>
                    <li>Galletas de avena con pasas</li>
                    <li>Helado de vainilla con caramelo</li>
                </ul>
            </li>
        </ul> 
        </div>
        <div class="table">
           <ul>
            <li>
                <h2>Bebidas</h2>
                <ul>
                    <li>Coca-Cola</li>
                    <li>Sprite</li>
                    <li>Fanta</li>
                    <li>Agua</li>
                    <li>Agua de jamaica</li>
                </ul>
            </li>
            <li>
                <h2>Extras</h2>
                <ul>
                    <li>Queso</li>
                    <li>Champiñones</li>
                    <li>Chile</li>
                    <li>Crema</li>
                    <li>Sal</li>
                </ul>
            </li>
        </ul> 
        </div>
    </main>
    <script>
        jQuery(document).ready(function($){
            $('.menu').addClass('active');
        });
    </script>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>