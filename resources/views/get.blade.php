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
        if( $_GET["name"] || $_GET["age"] ) {
            echo "Welcome ". $_GET['name']. "<br />";
            echo "You are ". $_GET['age']. " years old";

            exit();
        }
        ?>
    </body>
</html>
