
<div class="topbar">
            <div style="display:flex; flex-direction:row; align-items:center; height:59px;" class="logo"><img src="imagenes/logo.png" style="height: 59px; rotate: 90deg; margin-left:100px;" alt=""><h3>Cafe Descafe</h3> </div>
            
            <nav class="nav" id="navgen">
            <a href="index.php"><button class="boton1">Home</button></a>
            <a href="menu.php"><button class="boton1">Menú</button></a>
            
            <?php
            if (isset($_SESSION["user"])) {
                echo "<a href='reservaciones.php'><button class='boton1'>Reservas</button></a>";
                echo "<a href='miperfil.php'><button class='boton1'>Mi perfil</button></a>";
                echo "<a href='includes/logout.inc.php'><button class='boton1'>Log out</button></a>";
                echo "<a class='a-button' href='carrito.php'><button class='boton2'><i class='fa-solid fa-cart-shopping' style='color: #ffffff;'></i> Carrito</button></a>";
            }else{
                echo "<a class='a-button' href='login.php'>
                <button class='boton2'>
                    <i class='fa-solid fa-cart-shoppin' style='color: #ffffff;'></i>
                    Login
                </button>
            </a>";
            echo"<a class='a-button' href='signup.php'>
                <button class='boton2'>
                    <i class='fa-solid fa-user' style='color: #ffffff;'></i>
                    Registro 
                </button>
            </a>";
            }

            ?>
            <!--
                el enlace del boton de ingreso se pega al boton de carrito, hay que hacerle hide al boton de carrito hasta que alguien ingrese
            -->


            </nav>
        </div>
<!--
    <a class="a-button" href="carrito.php">
        <button class="boton2">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
            Carrito
        </button>
    </a>
-->