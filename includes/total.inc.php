<?php
    session_start();
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $usuario = $_SESSION['id'];

    $sql = "SELECT SUM(productos.precio * orden_carrito.cantidad) AS total_pedido FROM orden_carrito INNER JOIN productos ON orden_carrito.id_producto = productos.id_producto WHERE orden_carrito.id_usuario = '$usuario';";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $total = $row['total_pedido'];

    echo $total;

    mysqli_free_result($result);
    mysqli_close($conn);
    session_destroy();
?>