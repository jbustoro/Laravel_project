<?php

namespace App\Http\Controllers;

use App\DatoPersonal;
use Illuminate\Http\Request;

class DatoPersonalController extends Controller
{
    //
    function insertarDatoPersonal(Request $request){
        DatoPersonal::create($request->all());
        return view("post");
    }
}
