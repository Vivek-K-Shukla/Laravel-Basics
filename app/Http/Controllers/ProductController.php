<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    //Sending Product Data:-
    public function index(){
        $products=Product::all();
        return view('products.index',compact('products'));
    }

    //Showing Create Form:-
    public function create(){
        return view('products.create');
    }

    //To Store Product:-
    public function store(Request $req){
        $product=new Product;
        $product->name=$req->name;
        $product->description=$req->description;
        $product->price=$req->price;
        //Uploading Image:
        if($req->hasfile('image')){
            $file=$req->file('image');
            $extenstion=$file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('uploads/product/',$filename);
            $product->image=$filename;
        }
        $product->save();
        return redirect()->back()->with('status','Product Added Successfully!');
    }
    //Delete Product:-
    public function deleteProduct($id){
        $fetch=Product::find($id);
        $fetch->delete();
        return redirect('products.index');
      }
    //Edit Product:-
      public function editProduct($id){
        $edit=Product::find($id);
        return view('products.edit',['data'=>$edit]);
      }
    //Update Product:-
      public function updateProduct(Request $req,$id){
        $update=Product::find($req->id);
        $update->name=$req->name;
        $update->description=$req->description;
        $update->price=$req->price;
        //Updating File:
        if($req->hasfile('image')){
            $destination='uploads/product/'.$update->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$req->file('image');
            $extenstion=$file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('uploads/product/',$filename);
            $update->image=$filename;
        }
        $update->update();
        return redirect()->back()->with('status','Product Updated Successfully!');
      }


}
