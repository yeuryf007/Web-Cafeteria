<?php
    session_start();
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $producto = isset($_POST['idP'])?$_POST['idP']:'not yet';
    $usuario = $_SESSION['id'];

    $comprobarsql = "SELECT * FROM `orden_carrito` WHERE `id_usuario` = '$usuario' AND `id_producto` = '$producto'";
    $comprobarresult = mysqli_query($conn, $comprobarsql);
    $comprobarrow = mysqli_fetch_assoc($comprobarresult);

    $cantidad = $comprobarrow['cantidad'];
    if ($cantidad == 1) {
        $sql = "DELETE FROM `orden_carrito` WHERE `orden_carrito`.`id_usuario` = '$usuario' AND `orden_carrito`.`id_producto` = '$producto'";
    } else {
        $cantidad = $cantidad - 1;
        $sql = "UPDATE `orden_carrito` SET `cantidad` = '$cantidad' WHERE `orden_carrito`.`id_usuario` = '$usuario' AND `orden_carrito`.`id_producto` = '$producto'";
    }
    
    $result = mysqli_query($conn, $sql);

    mysqli_free_result($result);
    mysqli_close($conn);
    session_destroy();
?>