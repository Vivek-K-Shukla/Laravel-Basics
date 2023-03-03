<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Database;

class DatabaseController extends Controller
{
    //By Importing DB in controller(Querybuilder):-
         function getData(){
            return DB::table('databases')->get();
         }

    //By Using Model:-
      function adddata(){
      $data=new Database;
      $data->name="Vivek Shukla";
      $data->email="vivekshukla21@gmail.com";
      $data->rollnumber="23234";
      $data->contact="9876543345";
      $data->branch="CSE";
      $data->save();
    } 
    //View Data:-
    function viewData(){
      $view=Database::all();
      return $view;
    }
}
