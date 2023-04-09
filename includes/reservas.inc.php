<?php
if (isset($_POST["submit"])) {
    $id_usuario = $_POST["id_usuario"];
    $numerop = $_POST["numerop"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $mensaje = $_POST["mensaje"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputReserva($numerop, $date, $time) !==false){ 
        header("location: ../reservaciones.php?error=emptyinput");

        exit();
    }
    
    if (is_future_date($date) !==false){ 
        header("location: ../reservaciones.php?error=pastdate");
        exit();
    }
    CreateReg($conn, $id_usuario, $numerop, $date, $time, $mensaje);
}
    else{
        header("location: ../reservaciones.php");
        exit();  
    }