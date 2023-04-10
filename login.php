<?php
        include_once 'includes/sesion.php';
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    
    <link type="text/css" rel="stylesheet" href="css/stylehome.css">
    <link rel="stylesheet" href="css/stylesignup.css">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/87238b4970.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<header>
    <?php
    include_once 'header.php';
    ?>
        <div class="titulo">
            <h1>Log in</h1>
        </div>
    </header>
    <main>
    <form class="formulario" action="includes/login.inc.php " method="post">
        <div class="textbox" id="divida">
        <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p> Llena todos los campos :P </p>";
        }
        else if($_GET["error"]=="no_existe"){
            echo "<p> Usuario no existe >:c </p>";
        }
        else if($_GET["error"]=="wronglogin"){
            echo "<p> Informacion de Log in incorrecta >:c </p>";
        }

      }
      
      ?>
        <input placeholder="Nombre/Email..." type="text" name="user" >
        <input placeholder="Contraseña..." type="password" name="password" >
        <a class="a-button" href=""><button class="boton" name="submit" type="submit">Log in</button></a>
        <br>
        No tienes una cuenta? <a href="signup.php">Registrate</a>
        </div>
        
        
      </form>
    </main>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>