<?php
session_start();
?>
<?php

if(isset($_POST["submit"])){
 $name = $_POST["name"];
 $email = $_POST["email"]; 
 $password = $_POST["password"]; 
 $repassword = $_POST["repassword"]; 
 $telefono = $_POST["telefono"]; 
 $direccion = $_POST["direccion"];    


require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputSignup($name, $email, $password, $repassword, $telefono, $direccion) !==false){ 
    header("location: ../signup.php?error=emptyinput");
    exit();
}
if (invalidName($name) !==false){ 
    header("location: ../signup.php?error=invalidname");
    exit();
}
if (invalidEmail($email) !==false){ 
    header("location: ../signup.php?error=invalidemail");
    exit();
}
if (pwdMatch($password, $repassword) !==false){ 
    header("location: ../signup.php?error=passwordsdontmatch");
    exit();
}
if (uidExists($conn, $name, $email) !==false){ 
    header("location: ../signup.php?error=nametaken");
    exit();
}

createUser($conn, $name, $email, $password, $telefono, $direccion);

}
else{
    header("location: ../signup.php");
}