<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
   //Agrregates with Query Biulder:-
   public function query(){
    $data = DB::table('builders')
    // return DB::table('builders')->count()
    // return DB::table('builders')->min('name')
    // return DB::table('builders')->max('name')
    // return DB::table('builders')->avg('id')
    // return DB::table('builders')->sum('id')
    // ->where('id',2)
    // ->where('address','Delhi')
    ->get();
    return view('querybuilder.list',['data'=>$data]);
   } 
}
