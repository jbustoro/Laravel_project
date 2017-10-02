<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
    </head>
    <body>
        <a href="./"><img src="/icons/back.gif"></a>
        <br/>
        <br/>

        <?php
        if( $_POST["nombre"] || $_GET["edad"] ) {
            echo "Bienvenido ". $_POST['nombre']. "<br />";
            echo "Tienes ". $_POST['edad']. " años";

            exit();
        }
        ?>
    </body>
</html>
