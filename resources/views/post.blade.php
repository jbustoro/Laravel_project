@extends('layouts.master')

@section('content')
    <a href="./"><img src="/icons/back.gif"></a>
    <br/>
    <br/>

    <?php
    if($_POST) {
        echo "Bienvenido ". $_POST['nombre']. "<br />";
        echo "Tienes ". $_POST['edad']. " años";

        exit();
    }
    ?>
@endsection
