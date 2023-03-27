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
    <form class="formulario" action="signup.inc.php" method="post">
        <div class="textbox" id="divida">
        <input placeholder="Primer nombre..." type="text" name="nombre" required>
        <input placeholder="Contraseña..." type="password" name="password" required>
        <input placeholder="Verificar contraseña..." type="text" name="repassword" required>
        <input placeholder="Correo..." type="email" name="email" required>
        <input placeholder="Telefono..." type="text"  name="numero" required>
        <input placeholder="Direccion" type="text" name="direccion" required>
        <a class="a-button" href=""><button class="boton" name="submit" type="submit">Registrarse</button></a>
        </div>
        
      </form>
    </main>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>