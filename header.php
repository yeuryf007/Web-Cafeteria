<?php
session_start();
?>
        
        <div class="topbar">    
            <div class="logo">Logo Empresa</div>
            <nav class="nav" id="navgen">
            <a href="index.php"><button class="boton1">Home</button></a>
            <a href="reservaciones.php"><button class="boton1">Reservas</button></a>
            <a href="menu.php"><button class="boton1">Menú</button></a>
            <?php
            if (isset($_SESSION["user"])) {
                echo "<a href='miperfil.php'><button class='boton1'>Mi perfil</button></a>";
                echo "<a href='includes/logout.inc.php'><button class='boton1'>Log out</button></a>";
            }
            ?>
            <!--
                el enlace del boton de ingreso se pega al boton de carrito, hay que hacerle hide al boton de carrito hasta que alguien ingrese
            -->
            <a class="a-button" href="login.php">
                <button class="boton2">
                    <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                    Login
                </button>
            </a>
            <a class="a-button" href="signup.php">
                <button class="boton2">
                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                    Registro 
                </button>
            </a>
            
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
    
