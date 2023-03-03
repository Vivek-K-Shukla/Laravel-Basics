<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //HTML Integration Functions:-
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function class(){
        return view('frontend.class');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function single(){
        return view('frontend.single');
    }

    public function team(){
        return view('frontend.team');
    }
}
