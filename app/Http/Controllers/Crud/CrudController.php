<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function form(){
        return view("crud.index");
    }

    public function add(Request $req){
        $student=new Crud;
        $student->name=$req->name;
        $student->email=$req->email;
        $student->password=$req->password;
        $student->branch=$req->branch;
        $student->year=$req->year;
        $student->institute=$req->institute;
        $student->save();
        return redirect('show-data')->with("Member Added Successfully!");;
    }

    public function show_list(){
        $show=Crud::all();
        return view('crud.list',['students'=>$show]);
    }

    public function edit_data($id){
        $edit=Crud::find($id);
        return view('crud.edit',['data'=>$edit]);
    }

    public function update_data(Request $req,$id){
        $update=Crud::find($req->id);
        $update->name=$req->name;
        $update->email=$req->email;
        $update->password=$req->password;
        $update->branch=$req->branch;
        $update->year=$req->year;
        $update->institute=$req->institute;
        $update->save();
        return redirect('show-data');
    }
}
