<?php
    session_start();
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $producto = isset($_POST['idP'])?$_POST['idP']:'not yet';
    $usuario = $_SESSION['id'];

    $elimsql = "DELETE FROM `orden_carrito` WHERE `id_usuario` = '$usuario' AND `id_producto` = '$producto'";
    $comprobarresult = mysqli_query($conn, $elimsql);

    mysqli_free_result($comprobarresult);
    mysqli_close($conn);

?>