<?php
if (isset($_POST["submit"])) {
    $user = $_POST["user"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($user, $password) !==false){ 
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    loginUser($conn,$user,$password);
}
    else{
        header("location: ../login.php");
        exit();  
    }
