@extends('layouts.master')

@section('content')
    <h1><a href="agur">Hello World!</a></h1>

    <form action = "get" method = "GET">
        Name: <input type = "text" name = "name" />
        Age: <input type = "text" name = "age" />
        <input type="submit" value="GET" />
    </form>
    <br/>
    <form action = "post" method = "POST">
        {{ csrf_field() }}
        Nombre: <input type = "text" name = "nombre" />
        Edad: <input type = "text" name = "edad" />
        <input type = "submit" value="POST" />
    </form>
    <br/>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection


