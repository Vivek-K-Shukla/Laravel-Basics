<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Increment;

class IncrementController extends Controller
{
    public function counter(){
        return view('count');
    }

    public function counter_add(Request $req){
        $inc=new Increment;
        $inc->counter=$req->counter;
        $inc->save();
        // return redirect()->back()->with('status','Product Added Successfully!');

    }

    public function inc(){
        return view('increment');
    }
}
