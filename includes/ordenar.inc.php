<?php

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

$sql = "SELECT * FROM `productos` WHERE `descripcion` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", 'entradas');
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id_producto, $nombre, $precio, $descripcion, $stock);
$stmt->fetch();
$stmt->close();
?>