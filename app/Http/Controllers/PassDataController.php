<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassDataController extends Controller
{
    //Passing Data on view:-
    function showData($name){
        return view('pass_data',['data'=>$name]);
    }
}
