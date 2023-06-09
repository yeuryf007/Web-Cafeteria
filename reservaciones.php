<?php
        include_once 'includes/sesion.php';
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="css/stylereserva.css">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87238b4970.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
            <?php
                if (isset($_SESSION["user"])||isset($_SESSION["id"])) {
                    echo "<h3> Introduzca sus datos de la reserva " . $_SESSION["user"]."</h3>";
                    
                }
                
            ?>
            <form  method="post">
                <table class="div1">
                    <tr>
                        <td><i class="fa-solid fa-user-group iconores"></i></td>
                        <input type="hidden"  name="id_usuario" value=<?php echo $_SESSION['id'] ?>>
                        <td><div class="div1"><input type="number"  min="1" max="15" class="inputres" placeholder="Nro personas" name="numerop"></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-calendar-days iconores"></i></td>
                        <td><input type="date" class="inputres" placeholder="Mañana" name="date"></td>
                    </tr>
                    <tr>
                        <td><i class="fa-regular fa-clock iconores"></i></td>
                        <td><input type="time" min="09:00" max="20:00" class="inputres" name="time"></td>
                    </tr>
                    <tr>
                        <td><i class="fa-regular fa-message iconores"></i></td>
                        <td><textarea style="resize:none; width:450px; margin-bottom: 10px; margin-top: 10px;" name="mensaje"></textarea></td>
                    </tr>
                </table>
                <button id="boton3" class="botonreservar" name="submit" type="submit">Reservar</button>
            </form>
        </div>
    </main>
    <script>
        $(document).ready(function(){
            /* ajax para ingresar datos a carrito del cliente */
            $(".botonreservar").click(function(e){
                var usuario = $("input[name='id_usuario']").val();
                var personas = $("input[name='numerop']").val();
                var fecha = $("input[name='date']").val();
                var hora = $("input[name='time']").val();
                var mensaje = $("textarea[name='mensaje']").val();

                e.preventDefault();

                $.ajax({
                    url: "includes/reservas.inc.php",
                    method: "POST",
                    data: {usuario: usuario, personas: personas, fecha: fecha, hora: hora, mensaje: mensaje},
                    success: function(result){
                        alert(result);
                    }
                });
            });
        });
    </script>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>