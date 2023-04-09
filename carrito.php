<?php
        include_once 'includes/sesion.php';
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="css/stylecar.css">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87238b4970.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <header>
        <?php
        include_once 'header.php';
        ?>
    
        <div class="titulo">
            <h1 id="titulo">Carrito de compras</h1>
        </div>
        
    </header>
    <main>
        <div id="centro">
            <div class="ordenes">
                <div id="nomped">
                    <p class="titulis">Nombre del producto</p>
                    <p>Precio del producto</p>
                    <p id="precio"></p>
                    <button style="width: 100px;" name="eliminar" id="boton3">Eliminar</button>
                </div>
                <div class="number">
                    <span class="minus">-</span>
                    <input type="number" value="1" id="num">
                    <span class="plus">+</span>
                </div>
            </div>
        </div>
        <div id="derecha">
            <p class="titulis">Subtotal</p>
            <p class="resultis" id="subtotal">Num subtotal</p> 
            <p class="titulis">Total</p>
            <p class="resultis" id="total">Num total</p> <!-- Precio total, si quieren le ponemos el 18% diuna ve -->
            <p class="titulis">Código de Promoción</p>
            <input type="text" placeholder="INSERTE CODIGO" style="width: 300px; margin-bottom:5px;">
            <button id="boton3">Aplicar</button>
            <button id="checkout">Checkout</button>
        </div>
    </main>

    <script>
        	$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
    </script>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>