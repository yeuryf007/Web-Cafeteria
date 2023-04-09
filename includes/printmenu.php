<?php
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    $a =isset($_POST['tipo'])?$_POST['tipo']:'not yet';

    $sql = "SELECT * FROM `productos` WHERE `descripcion` = '$a'";
    
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
?>