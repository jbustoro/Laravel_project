<?php

namespace App\Http\Controllers;

use App\DatoPersonal;
use Illuminate\Http\Request;

class DatoPersonalController extends Controller
{
    //
    function insertarDatoPersonal(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:30',
            'edad' => 'required|integer|max:150',
        ]);
        DatoPersonal::create($request->all());
        return view("post");
    }
}
