<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="css/stylemenu.css">
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
            <h1>Menú</h1>
        </div>
        <button id="ordenar">Ordenar</button>
    </header>
    <main>
        <div id="cuerpo">
            <div class="table">
                <div class="menus">
                    <img src="imagenes/ensalada.png">
                    <h2>Entradas</h2>
                    <ul>
                        <li>Ensalada de tomate y cebolla</li>
                        <li>Ensalada de col y zanahoria</li>
                        <li>Ensalada de lechuga y pepino</li>
                        <li>Ensalada de espinaca y aguacate</li>
                        <li>Ensalada de lechuga y tomate</li>
                    </ul>
                </div>
                    
                <div class="menus">
                <img src="imagenes/ribeye.png">
                    <h2>Platos fuertes</h2>
                        <ul>
                            <li>Pollo a la plancha</li>
                            <li>Carne asada</li>
                            <li>Filete de pescado</li>
                            <li>Chuleta de cerdo</li>
                            <li>Chuleta de res</li>
                        </ul>
                </div>
                <div class="menus">
                <img src="imagenes/tarta fresa.png">
                    <h2>Postres</h2>
                        <ul>
                            <li>Brownie de chocolate</li>
                            <li>Galletas de avena con pasas</li>
                            <li>Helado de vainilla con caramelo</li>
                        </ul>
                </div>
            </div>
            <div class="table">
            <div class="menus">
            <img src="imagenes/jugos.png">
                    <h2>Bebidas</h2>
                        <ul>
                            <li>Jugo de naranja</li>
                            <li>Jugo de piña</li>
                            <li>Jugo de mango</li>
                            <li>Jugo de papaya</li>
                            <li>Jugo de uva</li>
                        </ul>
            </div>
                
                <div class="menus">
                <img src="imagenes/crema.png">
                    <h2>Extras</h2>
                    <ul>
                        <li>Arroz</li>
                        <li>Papas fritas</li>
                        <li>Plátano frito</li>
                    </ul>
                </div>

                
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function(){
            $('#ordenar').click(function(){
                $('.table').hide();
                $('main').load('ordenar.php');
            });
        });
    </script>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>