<?php
function emptyInputSignup($name, $email, $password, $repassword, $telefono, $direccion) {
    $result = null;
    if(empty($name) || empty($email) || empty($password) || empty($repassword) || empty($telefono) || empty($direccion)){
       $result=true; 
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidName($name) {
    $result = null; 
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email) {
    $result = null; 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
        }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($password, $repassword) {
    $result = null; 
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
    $result = null;
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
        header("location: ../index.php");
        exit();
    }
}
