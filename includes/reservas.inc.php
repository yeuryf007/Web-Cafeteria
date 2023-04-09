<?php
    $id_usuario = isset($_POST['usuario'])?$_POST['usuario']:'not yet';
    $numerop = isset($_POST['personas'])?$_POST['personas']:'not yet';
    $date = isset($_POST['fecha'])?$_POST['fecha']:'not yet';
    $time = isset($_POST['hora'])?$_POST['hora']:'not yet';
    $mensaje = isset($_POST['mensaje'])?$_POST['mensaje']:'not yet';

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $result = "Se ha realizado la reserva";

    if (invalidPeople($numerop) !==false){ 
        $result = "El número de personas debe ser mayor a 0 y menor a 15";
        echo $result;
        exit();
    }

    if (invalidTime($time) !==false){ 
        $result = "La hora debe ser entre 8:00 y 22:00";
        echo $result;
        exit();
    }

    if (emptyInputReserva($numerop, $date, $time) !==false){ 
        $result = "Faltaron campos por llenar";
        echo $result;
        exit();
    }
    
    if (is_future_date($date) !==false){ 
        $result = "La fecha debe ser posterior a la actual";
        echo $result;
        exit();
    }

    CreateReg($conn, $id_usuario, $numerop, $date, $time, $mensaje);
    echo $result;