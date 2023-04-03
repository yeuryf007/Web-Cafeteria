<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="css/styleperfil.css">
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
            <div id="fotoperf">
                <img src="imagenes/fotoperf.png">
            </div>
            <div id="nomuser">
               <h1><?php
                if (isset($_SESSION["user"])) {
                    echo "<p id='usunom'>" . $_SESSION["user"]."</p>";
                }
            ?></h1> 
            </div>
            
        </div>
    </header>
    <main>
        <div id="izq">
            <button id="boton3" onclick="scrollToElement('infgen', 50)">Sobre mí</button>
            <button id="boton3" onclick="scrollToElement('reserv', 50)">Reservaciones</button>
            <button id="boton3" onclick="scrollToElement('fotos', 50)">Fotos</button>
        </div>
        <div id="centro">
            <div class="userinfo" id="infgen">
                <h1>Sobre mí</h1>
                <p>Soy una persona curiosa, creativa y comprometida con mi trabajo y mis proyectos. Me gusta enfrentar nuevos desafíos y siempre estoy dispuesto a aprender cosas nuevas. 
                    Cuando no estoy trabajando, me gusta pasar tiempo con mi familia y amigos, disfrutar de la naturaleza, leer libros y escuchar música.</p>
            </div>
            <div class="userinfo" id="reserv">
                <h1>Reservaciones</h1>
                <table id="tabla2">
                    <tr>
                        <th>Día</th>
                        <th>Núm. personas</th>
                        <th>Hora</th>
                        <th>Comentarios especiales</th>
                    </tr>
                    <tr>
                        <td>03/02/2023</td>
                        <td>4</td>
                        <td>8:00 pm</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>20/02/2023</td>
                        <td>2</td>
                        <td>6:00 pm</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>07/03/2023</td>
                        <td>2</td>
                        <td>1:00 pm</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>23/03/2023</td>
                        <td>6</td>
                        <td>9:00 pm</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>02/04/2023</td>
                        <td>2</td>
                        <td>7:00 pm</td>
                        <td> - </td>
                    </tr>
                </table>
            </div>
            
            <div class="userinfo" id="fotos">
                <h1>Fotos</h1>
                <div id="fotes">
                    <a href="imagenes/epagueti.jpg"> <img src="imagenes/epagueti.jpg" class="fotose"></a>
                    <a href="imagenes/espaguet.jpg"> <img src="imagenes/espaguet.jpg" class="fotose"></a>
                    <a href="imagenes/frito.jpg"> <img src="imagenes/frito.jpg" class="fotose"> </a>
                    <a href="imagenes/pisa.jpg"> <img src="imagenes/pisa.jpg" class="fotose"></a>
                    <a href="imagenes/sanguchito.jpg"> <img src="imagenes/sanguchito.jpg" class="fotose"></a>
                </div>
                
            </div>
            <button onclick="myFunction()" id="boton3">Mostrar o esconder fotos</button>
        </div>
    </main>
    <script>
        function myFunction() {
            var x = document.getElementById("fotes");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function scrollToElement(id, margin) {
            var element = document.getElementById(id);
            var position = element.offsetTop - margin;
            window.scrollTo({
                top: position,
                behavior: "smooth"
            });
        }
    </script>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>