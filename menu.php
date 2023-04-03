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
                }
                else{
                    $('#ordenar').text('Ordenar');
                    $('#titulo').text('Menú');
                    $('#main2').hide();
                    $('#cuerpo').show();
                }
            });
            $('#entradas').click(function(){
                $('#comidas-div').html('<?php
                    $serverName = "localhost";
                    $dBUsername = "root";
                    $dBPassword = "";
                    $dBName = "ecommerce";
                    
                    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
                    
                    if (!$conn) {
                        die("Conexion Fallo: " . mysqli_connect_error());
                    }
                    
                    $sql = "SELECT * FROM `productos` WHERE `descripcion` = 'entrada'";
                    
                    $result = mysqli_query($conn, $sql);
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_producto = $row['id_producto'];
                        $nombre = $row['nombre'];
                        $precio = $row['precio'];
                        $descripcion = $row['descripcion'];
                        $stock = $row['stock'];
                        
                        echo '<div class="comida"><h2>', $nombre, '</h2><p>', $nombre, '</p><p>Precio<br>$', $precio, '</p><button class="order-button" id="', $id_producto, '">Agregar</button></div>';
                    }
                    
                    mysqli_free_result($result);
                    mysqli_close($conn);
                ?>');
            });
            $('#platosfuertes').click(function(){
                $('#comidas-div').html('<?php
                    $serverName = "localhost";
                    $dBUsername = "root";
                    $dBPassword = "";
                    $dBName = "ecommerce";
                    
                    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
                    
                    if (!$conn) {
                        die("Conexion Fallo: " . mysqli_connect_error());
                    }
                    
                    $sql = "SELECT * FROM `productos` WHERE `descripcion` = 'plato fuerte'";
                    
                    $result = mysqli_query($conn, $sql);
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_producto = $row['id_producto'];
                        $nombre = $row['nombre'];
                        $precio = $row['precio'];
                        $descripcion = $row['descripcion'];
                        $stock = $row['stock'];
                        
                        echo '<div class="comida"><h2>', $nombre, '</h2><p>', $nombre, '</p><p>Precio<br>$', $precio, '</p><button class="order-button" id="', $id_producto, '">Agregar</button></div>';
                    }
                    
                    mysqli_free_result($result);
                    mysqli_close($conn);
                ?>');
            });
            $('#postres').click(function(){
                $('#comidas-div').html('<?php
                    $serverName = "localhost";
                    $dBUsername = "root";
                    $dBPassword = "";
                    $dBName = "ecommerce";
                    
                    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
                    
                    if (!$conn) {
                        die("Conexion Fallo: " . mysqli_connect_error());
                    }
                    
                    $sql = "SELECT * FROM `productos` WHERE `descripcion` = 'postre'";
                    
                    $result = mysqli_query($conn, $sql);
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_producto = $row['id_producto'];
                        $nombre = $row['nombre'];
                        $precio = $row['precio'];
                        $descripcion = $row['descripcion'];
                        $stock = $row['stock'];
                        
                        echo '<div class="comida"><h2>', $nombre, '</h2><p>', $nombre, '</p><p>Precio<br>$', $precio, '</p><button class="order-button" id="', $id_producto, '">Agregar</button></div>';
                    }
                    
                    mysqli_free_result($result);
                    mysqli_close($conn);
                ?>');
            });
            $('#bebidas').click(function(){
                $('#comidas-div').html('<?php
                    $serverName = "localhost";
                    $dBUsername = "root";
                    $dBPassword = "";
                    $dBName = "ecommerce";
                    
                    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
                    
                    if (!$conn) {
                        die("Conexion Fallo: " . mysqli_connect_error());
                    }
                    
                    $sql = "SELECT * FROM `productos` WHERE `descripcion` = 'bebida'";
                    
                    $result = mysqli_query($conn, $sql);
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_producto = $row['id_producto'];
                        $nombre = $row['nombre'];
                        $precio = $row['precio'];
                        $descripcion = $row['descripcion'];
                        $stock = $row['stock'];
                        
                        echo '<div class="comida"><h2>', $nombre, '</h2><p>', $nombre, '</p><p>Precio<br>$', $precio, '</p><button class="order-button" id="', $id_producto, '">Agregar</button></div>';
                    }
                    
                    mysqli_free_result($result);
                    mysqli_close($conn);
                ?>');
            });
            $('#extras').click(function(){
                $('#comidas-div').html('<?php
                    $serverName = "localhost";
                    $dBUsername = "root";
                    $dBPassword = "";
                    $dBName = "ecommerce";
                    
                    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
                    
                    if (!$conn) {
                        die("Conexion Fallo: " . mysqli_connect_error());
                    }
                    
                    $sql = "SELECT * FROM `productos` WHERE `descripcion` = 'extra'";
                    
                    $result = mysqli_query($conn, $sql);
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_producto = $row['id_producto'];
                        $nombre = $row['nombre'];
                        $precio = $row['precio'];
                        $descripcion = $row['descripcion'];
                        $stock = $row['stock'];
                        
                        echo '<div class="comida"><h2>', $nombre, '</h2><p>', $nombre, '</p><p>Precio<br>$', $precio, '</p><button class="order-button" id="', $id_producto, '">Agregar</button></div>';
                    }
                    
                    mysqli_free_result($result);
                    mysqli_close($conn);
                ?>');
            });
        });
    </script>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>