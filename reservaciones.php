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
    <title>Reservaciones</title>
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
            <h2>Reservación de mesa</h2>
            <form action="" method="post">
                <table class="div1">
                    <tr>
                        <td><i class="fa-solid fa-user-group iconores"></i></td>
                        <td><div class="div1"><input type="number"  min="1" max="15" class="inputres" placeholder="Nro personas"></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-calendar-days iconores"></i></td>
                        <td><input type="date" class="inputres" placeholder="Mañana"></td>
                    </tr>
                    <tr>
                        <td><i class="fa-regular fa-clock iconores"></i></td>
                        <td><input type="time" min="09:00" max="20:00" class="inputres"></td>
                    </tr>
                    <tr>
                        <td><i class="fa-regular fa-message iconores"></i></td>
                        <td><textarea style="resize:none; width:450px; margin-bottom: 10px; margin-top: 10px;"></textarea></td>
                    </tr>
                </table>
                <button id="boton3">Reservar</button>
            </form>
        </div>
    </main>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>