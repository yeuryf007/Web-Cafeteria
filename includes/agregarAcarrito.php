<?php
    session_start();
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $producto = isset($_POST['idP'])?$_POST['idP']:'not yet';
    $usuario = $_SESSION['id'];

    $comprobarsql = "SELECT * FROM `orden_carrito` WHERE `id_usuario` = '$usuario' AND `id_producto` = '$producto'";
    $comprobarresult = mysqli_query($conn, $comprobarsql);
    $comprobarrow = mysqli_fetch_assoc($comprobarresult);

    if ($comprobarrow) {
        $cantidad = $comprobarrow['cantidad'];
        $cantidad = $cantidad + 1;
        $sql = "UPDATE `orden_carrito` SET `cantidad` = '$cantidad' WHERE `orden_carrito`.`id_usuario` = '$usuario' AND `orden_carrito`.`id_producto` = '$producto'";
    } else {
        $sql = "INSERT INTO `orden_carrito` (`id_usuario`, `id_producto`, `cantidad`) VALUES ('$usuario', '$producto', '1');";
    }
    
    $result = mysqli_query($conn, $sql);

    mysqli_free_result($result);
    mysqli_close($conn);
    session_destroy();