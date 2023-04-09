<?php
function emptyInputSignup($name, $email, $password, $repassword, $telefono, $direccion) {
    if(empty($name) || empty($email) || empty($password) || empty($repassword) || empty($telefono) || empty($direccion)){
       $result=true; 
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidName($name) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
        }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($password, $repassword) {
    if ($password !== $repassword) {
        $result = true;
        }
    else{
        $result=false;
    }
    return $result;
}

function uidExists($conn, $name, $email) {
    $sql = "SELECT * FROM usuarios WHERE nombre = ? OR correo = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $password, $telefono, $direccion) {
    $sql = "INSERT INTO usuarios (nombre, correo, contrasena, telefono, direccion) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
    }
    $hashedPwd =password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $hashedPwd, $telefono, $direccion);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}
function emptyInputLogin($name, $password){
    if(empty($name)||empty($password)){
       $result=true; 
    }
    else{
        $result=false;
    }
    return $result;
}
function loginUser($conn, $name, $password){
    $uidExists = uidExists($conn, $name, $name);
    if($uidExists === false){
        header("location: ../login.php?error=no existe");
        exit();
    }
    
    $passwordhashed = $uidExists["contrasena"];
    $checkpwd = password_verify($password, $passwordhashed);
    
    if($checkpwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else{
        session_start();
        $_SESSION["user"]= $uidExists["nombre"];
        $_SESSION['id']= $uidExists["id_usuario"];
        header("location: ../index.php");
        exit();
    }
}
function emptyInputReserva($numerop, $date, $time){
    if(empty($numerop)||empty($date)||empty($time)){
        $result=true; 
     }
     else{
         $result=false;
     }
     return $result;
}
  
function is_future_date($date){
    $today = date('Y-m-d'); // Get today's date in Y-m-d format
    $datex = date('Y-m-d', strtotime($date)); // Convert input date string to Y-m-d format
    if(!($datex > $today)){
        $result=true; 
    }else{
        $result=false;
    }
    return $result; // Compare input date to today's date and return true if input date is in the future
}

function invalidTime($time){
    $valid = true;
    $format = 'H:i';
    $min_time = '8:00';
    $max_time = '22:00';
    
    $time = DateTime::createFromFormat($format, $time);
    $min_time = DateTime::createFromFormat($format, $min_time);
    $max_time = DateTime::createFromFormat($format, $max_time);

    if($time < $min_time || $time > $max_time){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function invalidPeople($numerop){
    if($numerop<1 || $numerop>15){
        $result=true; 
    }else{
        $result=false;
    }
    return $result;
}

function CreateReg($conn, $id_usuario, $numerop, $date, $time, $mensaje){
    $sql = "INSERT INTO reservaciones (id_usuario, nropersonas, fecha, hora, mensaje) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../reservaciones.php?error=stmtfailed");
    exit();
    }
    mysqli_stmt_bind_param($stmt, "iisss", $id_usuario, $numerop, $date, $time, $mensaje);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
