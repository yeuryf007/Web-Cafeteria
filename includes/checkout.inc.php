<?php
    session_start();
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $total = isset($_POST['total'])?$_POST['total']:'not yet';
    $usuario = $_SESSION['id'];

    $sql1 = "SELECT `orden_carrito`.`id_producto`, `orden_carrito`.`cantidad` FROM `orden_carrito`, `productos` WHERE `orden_carrito`.`id_usuario` = '$usuario' AND `orden_carrito`.`id_producto` = `productos`.`id_producto`";

    $result = mysqli_query($conn, $sql1);

    $comprobarsql = "SELECT * FROM `orden_carrito` WHERE `id_usuario` = '$usuario'";
    $comprobarresult = mysqli_query($conn, $comprobarsql);
    $comprobarrow = mysqli_fetch_assoc($comprobarresult);

    if ($comprobarrow){
        $sql2 = "INSERT INTO `pedidos` (`id_usuario`, `fecha`, `estado`, `valor_total`) VALUES ('$usuario', CURRENT_DATE(), 'PENDIENTE', '$total')";
        mysqli_query($conn, $sql2);

        while ($row = mysqli_fetch_assoc($result)) {
            $id_producto = $row['id_producto'];
            $cantidad = $row['cantidad'];

            $sql3 = "INSERT INTO `detalle_orden` (`id_pedido`, `id_producto`, `cantidad`) VALUES ('$usuario', '$id_producto', '$cantidad')";
            mysqli_query($conn, $sql3);
        }

        $sql4 = "DELETE FROM `orden_carrito` WHERE `orden_carrito`.`id_usuario` = '$usuario'";
        mysqli_query($conn, $sql4);
    }

    mysqli_free_result($result);
    mysqli_close($conn);
?>