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
            <h1 id="titulo">Menú</h1>
        </div>
        
    </header>
    <main>
    <button id="ordenar">Ordenar</button>
<!--Esto es el ordenar-->
        <div id="main2">
            <nav>
                <button id="entradas">Entradas</button>
                <button id="platosfuertes">Platos fuertes</button>
                <button id="postres">Postres</button>
                <button id="bebidas">Bebidas</button>
                <button id="extras">Extras</button>
            </nav>
            <div id="comidas-div">
                <div id="entradasdiv">
                    <div class="comida">
                        <h2>Ensalada de tomate y cebolla</h2>
                        <p>Ensalada de tomate y cebolla</p>
                        <p>Precio<br>$50</p>
                        <button id="entradas1">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Ensalada de col y zanahoria</h2>
                        <p>Ensalada de col y zanahoria</p>
                        <p>Precio<br>$50</p>
                        <button id="entradas2">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Ensalada de lechuga y pepino</h2>
                        <p>Ensalada de lechuga y pepino</p>
                        <p>Precio<br>$50</p>
                        <button id="entradas3">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Ensalada de espinaca y aguacate</h2>
                        <p>Ensalada de espinaca y aguacate</p>
                        <p>Precio<br>$50</p>
                        <button id="entradas4">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Ensalada de lechuga y tomate</h2>
                        <p>Ensalada de lechuga y tomate</p>
                        <p>Precio<br>$50</p>
                        <button id="entradas5">Agregar</button>
                    </div>
                </div>
                <div id="platosfuertesdiv">
                    <div class="comida">
                        <h2>Pollo a la plancha</h2>
                        <p>Pollo a la plancha</p>
                        <p>Precio<br>$100</p>
                        <button id="platosfuertes1">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Carne asada</h2>
                        <p>Carne asada</p>
                        <p>Precio<br>$100</p>
                        <button id="platosfuertes2">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Filete de pescado</h2>
                        <p>Filete de pescado</p>
                        <p>Precio<br>$100</p>
                        <button id="platosfuertes3">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Chuleta de cerdo</h2>
                        <p>Chuleta de cerdo</p>
                        <p>Precio<br>$100</p>
                        <button id="platosfuertes4">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Chuleta de res</h2>
                        <p>Chuleta de res</p>
                        <p>Precio<br>$100</p>
                        <button id="platosfuertes5">Agregar</button>
                    </div>
                </div>
                <div id="postresdiv">
                    <div class="comida">
                        <h2>Brownie de chocolate</h2>
                        <p>Brownie de chocolate</p>
                        <p>Precio<br>$50</p>
                        <button id="postres1">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Galletas de avena con pasas</h2>
                        <p>Galletas de avena con pasas</p>
                        <p>Precio<br>$50</p>
                        <button id="postres2">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Helado de vainilla con caramelo</h2>
                        <p>Helado de vainilla con caramelo</p>
                        <p>Precio<br>$50</p>
                        <button id="postres3">Agregar</button>
                    </div>
                </div>
                <div id="bebidasdiv">
                    <div class="comida">
                        <h2>Jugo de naranja</h2>
                        <p>Jugo de naranja</p>
                        <p>Precio<br>$50</p>
                        <button id="bebidas1">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Jugo de piña</h2>
                        <p>Jugo de piña</p>
                        <p>Precio<br>$50</p>
                        <button id="bebidas2">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Jugo de mango</h2>
                        <p>Jugo de mango</p>
                        <p>Precio<br>$50</p>
                        <button id="bebidas3">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Jugo de papaya</h2>
                        <p>Jugo de papaya</p>
                        <p>Precio<br>$50</p>
                        <button id="bebidas4">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Jugo de uva</h2>
                        <p>Jugo de uva</p>
                        <p>Precio<br>$50</p>
                        <button id="bebidas5">Agregar</button>
                    </div>
                </div>
                <div id="extrasdiv">
                    <div class="comida">
                        <h2>Arroz</h2>
                        <p>Arroz</p>
                        <p>Precio<br>$50</p>
                        <button id="extras1">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Papas fritas</h2>
                        <p>Papas fritas</p>
                        <p>Precio<br>$50</p>
                        <button id="extras2">Agregar</button>
                    </div>
                    <div class="comida">
                        <h2>Plátano frito</h2>
                        <p>Plátano frito</p>
                        <p>Precio<br>$50</p>
                        <button id="extras4">Agregar</button>
                    </div>
                </div>
            </div>
        </div>

<!--Este es el menú-->
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
            $('#main2').hide();
            $('#ordenar').click(function(){
                if($('#ordenar').text() == 'Ordenar'){
                    $('#ordenar').text('Menú');
                    $('#titulo').text('Ordenar');
                    $('#cuerpo').hide();
                    $('#main2').show();
                    $('#platosfuertesdiv').hide();
                    $('#postresdiv').hide();
                    $('#bebidasdiv').hide();
                    $('#extrasdiv').hide();
                }
                else{
                    $('#ordenar').text('Ordenar');
                    $('#titulo').text('Menú');
                    $('#main2').hide();
                    $('#cuerpo').show();
                }
            });
            $('#entradas').click(function(){
                $('#entradasdiv').show();
                $('#platosfuertesdiv').hide();
                $('#postresdiv').hide();
                $('#bebidasdiv').hide();
                $('#extrasdiv').hide();
            });
            $('#platosfuertes').click(function(){
                $('#entradasdiv').hide();
                $('#platosfuertesdiv').show();
                $('#postresdiv').hide();
                $('#bebidasdiv').hide();
                $('#extrasdiv').hide();
            });
            $('#postres').click(function(){
                $('#entradasdiv').hide();
                $('#platosfuertesdiv').hide();
                $('#postresdiv').show();
                $('#bebidasdiv').hide();
                $('#extrasdiv').hide();
            });
            $('#bebidas').click(function(){
                $('#entradasdiv').hide();
                $('#platosfuertesdiv').hide();
                $('#postresdiv').hide();
                $('#bebidasdiv').show();
                $('#extrasdiv').hide();
            });
            $('#extras').click(function(){
                $('#entradasdiv').hide();
                $('#platosfuertesdiv').hide();
                $('#postresdiv').hide();
                $('#bebidasdiv').hide();
                $('#extrasdiv').show();
            });
        });
    </script>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>