@extends('layouts.master')

@section('content')
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
@endsection
