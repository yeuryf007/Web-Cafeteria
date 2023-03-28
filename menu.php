<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="css/stylemenu.css">
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
            <h1 id="titulo">Menú</h1>
        </div>
        <button id="ordenar">Ordenar</button>
    </header>
    <main>
        
    </main>
    <script>
        $(document).ready(function(){
            $('main').load('mainmenu.php');
            $('#ordenar').click(function(){
                if($('#ordenar').text() == 'Ordenar'){
                    $('#ordenar').text('Menú');
                    $('#titulo').text('Ordenar');
                    $('mainmenu.php').hide(1000);
                    $('main').load('ordenar.php');
                    $('#platosfuertesdiv').hide();
                    $('#postresdiv').hide();
                    $('#bebidasdiv').hide();
                    $('#extrasdiv').hide();
                }
                else{
                    $('#ordenar').text('Ordenar');
                    $('#titulo').text('Menú');
                    $('ordenar.php').fadeOut();
                    $('main').load('mainmenu.php').fadein();
                }
            });
            $('#entradas').click(function(){
                $('#entradasdiv').show();
                $('#platosfuertesdiv').hide();
                $('#postresdiv').hide();
                $('#bebidasdiv').hide();
                $('#extrasdiv').hide();
            });
            $('#platosfuertes').click(function(){
                $('#entradasdiv').hide();
                $('#platosfuertesdiv').show();
                $('#postresdiv').hide();
                $('#bebidasdiv').hide();
                $('#extrasdiv').hide();
            });
            $('#postres').click(function(){
                $('#entradasdiv').hide();
                $('#platosfuertesdiv').hide();
                $('#postresdiv').show();
                $('#bebidasdiv').hide();
                $('#extrasdiv').hide();
            });
            $('#bebidas').click(function(){
                $('#entradasdiv').hide();
                $('#platosfuertesdiv').hide();
                $('#postresdiv').hide();
                $('#bebidasdiv').show();
                $('#extrasdiv').hide();
            });
            $('#extras').click(function(){
                $('#entradasdiv').hide();
                $('#platosfuertesdiv').hide();
                $('#postresdiv').hide();
                $('#bebidasdiv').hide();
                $('#extrasdiv').show();
            });
        });
    </script>
</body>
    <?php
    include_once 'footer.php';
    ?>
</html>