<?php
    session_start();
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $usuario = $_SESSION['id'];

    $sql = "SELECT * FROM `orden_carrito`, `productos` WHERE `orden_carrito`.`id_usuario` = '$usuario' AND `orden_carrito`.`id_producto` = `productos`.`id_producto`";
    
    echo $sql;
    $result = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id_producto = $row['id_producto'];
        $nombre = $row['nombre'];
        $precio = $row['precio'];
        $descripcion = $row['descripcion'];
        $cantidad = $row['cantidad'];
        
        echo '<div class="ordenes">
                    <div id="nomped">
                        <p class="titulis">', $nombre,'</p>
                        <p>Precio del producto</p>
                        <p id="precio">', $precio,'</p>
                        
                    </div>
                    <div class="num-y-elim">
                        <div class="number">
                            <span class="minus">-</span>
                            <input type="number" value="', $cantidad,'" id="num">
                            <span class="plus">+</span>
                        </div>
                        <button style="width: 100px;" name="eliminar" id="boton3">Eliminar</button>
                    </div>
                </div>';
    }
    
    mysqli_free_result($result);
    mysqli_close($conn);
?>