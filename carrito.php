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
            
        </div>
        <div id="derecha">
            <p class="titulis">Subtotal</p>
            <p class="resultis" id="subtotal">Num subtotal</p> 
            <p class="titulis">Total</p>
            <p class="resultis" id="total">Total + itbis</p> <!-- Precio total, si quieren le ponemos el 18% diuna ve -->
            <button id="checkout">Checkout</button>
        </div>
    </main>
    <script>
        $(document).ready(function(){
            load_data();
            /* ajax para imprimir ordenes de carrito */
            function load_data()
            {
                $.ajax({
                    url:"includes/carrito.inc.php",
                    method:"POST",
                    success:function(result)
                    {
                        $('#centro').html(result);
                    }
                });
            }
            
            /* ajax para eliminar ordenes de carrito */
            $("#centro").on("click", "#boton5", function(e){
                var clickedbuttonclass = $(this).attr('class');
                $producto = $(this).attr('class');
                $.ajax({
                    url: "includes/eliminar.inc.php",
                    method: "POST",
                    data: {idP: $producto},
                    success: function (result) {
                        load_data();
                    }
                });
            });

            $("#centro").on("click", ".minus", function(e){
                $producto = $(this).parent().parent().find("#boton5").attr('class');
                $.ajax({
                    url: "includes/minus.inc.php",
                    method: "POST",
                    data: {idP: $producto},
                    success: function (result) {
                        load_data();
                    }
                });
			});

			$("#centro").on("click", ".plus", function(e){
				$producto = $(this).parent().parent().find("#boton5").attr('class');
                $.ajax({
                    url: "includes/plus.inc.php",
                    method: "POST",
                    data: {idP: $producto},
                    success: function (result) {
                        load_data();
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