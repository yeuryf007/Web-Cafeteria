<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="css/stylereserva.css">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87238b4970.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <?php
        include_once 'header.php';
        ?>
    
        <div class="titulo">
            <h1>Reservas</h1>
        </div>
    </header>
    <main>
        <div id="reserva">
            <h2><strong>Reservación de mesa</strong></h2>
            <input type="text" class="inputres">
            <input type="text" class="inputres">
            <input type="text" class="inputres">
            <textarea></textarea>
            <button id="boton3">Reservar</button>
        </div>
    </main>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>