<?php
        include_once 'includes/sesion.php';
        ?>

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
    <title>Mi perfil</title>
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
            <button id="boton3" onclick="scrollToElement('histo', 50)">Historial de pedidos</button>
        </div>
        <div id="centro">
            <div class="userinfo" id="infgen">
                <h1>Sobre mí</h1>
                <p>Soy una persona curiosa, creativa y comprometida con mi trabajo y mis proyectos. Me gusta enfrentar nuevos desafíos y siempre estoy dispuesto a aprender cosas nuevas. 
                    Cuando no estoy trabajando, me gusta pasar tiempo con mi familia y amigos, disfrutar de la naturaleza, leer libros y escuchar música.</p>
            </div>
            <div class="userinfo" id="reserv">
                <h1>Reservaciones</h1>

                
                    <?php
                    //$sql= "SELECT * FROM `reservaciones` WHERE `id_usuario` = '$a' AND (`fecha` > NOW() OR (`fecha` = CURDATE() AND `hora` >= CURTIME())) ORDER BY `fecha` ASC, `hora` ASC";
                require_once 'includes/dbh.inc.php';
                include_once 'includes/sesion.php';
                $a = $_SESSION["id"];
                    $sql= "SELECT * FROM `reservaciones` WHERE `id_usuario` = '$a'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table id='tabla2'>
                    <tr>
                        <th>Día</th>
                        <th>Núm. personas</th>
                        <th>Hora</th>
                        <th>Comentarios especiales</th>
                    </tr>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo  "<th>". $row['fecha'] . "</th>" . "<th>" . $row['nropersonas'] . "</th>" . "<th>".$row['hora']. "</th>" . "<th>". $row['mensaje']. "</th>";
                            echo "</tr>";
                            }
                        } else {
                        echo "No hay reservas!";
                        }
            ?>
                    
                </table>
            </div>
            
            <div class="userinfo" id="histo">
                <h1>Historial de pedidos</h1>
                <div id="tabpeds">
                    <table id="tabla2">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Precio Total</th>
                        </tr>
                        <tr>
                            <td><strong>1</strong></td>
                            <td>Cafe</td>
                            <td>50</td>
                            <td>2</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Platano</td>
                            <td>20</td>
                            <td>4</td>
                            <td><strong>180 RD$</strong></td>
                        </tr>
                    </table>
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