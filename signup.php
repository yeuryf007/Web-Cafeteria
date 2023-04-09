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
    <title>Signup</title>
</head>
<body>
    <header>
        <?php
        include_once 'header.php';
        ?>
        <div class="titulo">
            <h1>Sign up</h1>
        </div>
    </header>
    <main>
    <form class="formulario" action="includes/signup.inc.php" method="post">
        <div class="textbox" id="divida">
        <input placeholder="Primer nombre..." type="text" name="name" >
        <input placeholder="Correo..." type="email" name="email" >
        <input placeholder="Contraseña..." type="password" name="password" >
        <input placeholder="Verificar contraseña..." type="password" name="repassword" >
        <input placeholder="Telefono..." type="text"  name="telefono" >
        <input placeholder="Direccion" type="text" name="direccion" >
        <button class="boton" name="submit" type="submit">Registrarse</button>
        <br>
        Ya tienes una cuenta? <a href="login.php">Ingresa aqui</a>
        <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p> Llena todos los campos :P </p>";
        }
        else if($_GET["error"]=="invalidname"){
            echo "<p> Escribe un nombre valido :P </p>";
        }
        else if($_GET["error"]=="invalidemail"){
            echo "<p> Escribe un correo valido :P </p>";
        }
        else if($_GET["error"]=="passwordsdontmatch"){
            echo "<p> Las contrasenas no son iguales :P </p>";
        }
        else if($_GET["error"]=="stmtfailed"){
            echo "<p> Oops algo salio mal :C </p>";
        }
        else if($_GET["error"]=="nametaken"){
            echo "<p> Ya ese nombre se encuentra registrado </p>";
        }
        else if($_GET["error"]=="none"){
            echo "<p> Usuario registrado </p>";
        }

      }
      
      ?>    
    </div>
        
      </form>

    </main>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>