<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassDataController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\IncrementController;
use App\Http\Controllers\Crud\CrudController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

//Passing data through route:-
Route::get('/contact{name}', function ($name) {
    // echo $name;
    return view('contact',['name'=>$name]);
});

//Passing data through Controller:-
Route::get('user/{name}',[PassDataController::class,'showData']);

//Laravel Form:-
Route::get('list',[MemberController::class,'showlist']);
Route::post('addmember',[MemberController::class,'addmember']);
Route::get('memberlist',[MemberController::class,'showmember']);
Route::get('delete/{id}',[MemberController::class,'deletemember']);
Route::get('edit/{id}',[MemberController::class,'editmember']);
Route::post('update',[MemberController::class,'updatemember']);

//Middleware
// Global Middleware:-
Route::get('noaccess', function () {
    return view('noaccess');
});

//Group Middleware:-
// Route::group(['middleware'=>['protectPage']],function(){
//     Route::get('memberlist',[MemberController::class,'showmember']);
// });

//Route Middleware:-
// Route::get('list',[MemberController::class,'showlist']);
// Route::post('addmember',[MemberController::class,'addmember'])->middleware('protectPage');
// Route::get('memberlist',[MemberController::class,'showmember'])->middleware('protectPage');
// Route::get('delete/{id}',[MemberController::class,'deletemember']);
// Route::get('edit/{id}',[MemberController::class,'editmember']);
// Route::post('update',[MemberController::class,'updatemember']);

//Database Connection:-
Route::get('database',[DatabaseController::class,'getdata']);
Route::post('addData',[DatabaseController::class,'addData']);
Route::get('viewData',[DatabaseController::class,'viewData']);

//File Upload:-
Route::get('upload',[MemberController::class,'upload']);
Route::post('uploadfile',[MemberController::class,'uploadfile']);

Route::get('products',[ProductController::class,'index']);
Route::get('add-product',[ProductController::class,'create']);
Route::post('add-product',[ProductController::class,'store']);
Route::get('deleteProduct/{id}',[ProductController::class,'deleteProduct']);
Route::get('editProduct/{id}',[ProductController::class,'editProduct']);
Route::post('updateProduct/{id}',[ProductController::class,'updateProduct']);

//Html Integration for Frontend Page:-
// Route::get('index',[HomeController::class,'index']);
// Route::get('about',[HomeController::class,'about']);
// Route::get('blog',[HomeController::class,'blog']);
// Route::get('class',[HomeController::class,'class']);
// Route::get('contact',[HomeController::class,'contact']);
// Route::get('gallery',[HomeController::class,'gallery']);
// Route::get('single',[HomeController::class,'single']);
// Route::get('team',[HomeController::class,'team']);
                     //OR
//Routing Controller Group:-
Route::controller(HomeController::class)->group(function(){
    Route::get('index','index');
    Route::get('about','about');
    Route::get('blog','blog');
    Route::get('class','class');
    Route::get('contact','contact');
    Route::get('gallery','gallery');
    Route::get('single','single');
    Route::get('team','team');
    });

//QueryBuilder:-
Route::get('query',[QueryBuilderController::class,'query']);    

Route::get('count',[IncrementController::class,'counter']);  
Route::post('counter-add',[IncrementController::class,'counter_add']);    

Route::get('inc',[IncrementController::class,'inc']);

//Crud Routes:-
Route::get('form',[CrudController::class,'form']);
Route::post('add',[CrudController::class,'add']);
Route::get('show-data',[CrudController::class,'show_list']);
Route::get('edit-data/{id}',[CrudController::class,'edit_data']);
Route::post('update-data/{id}',[CrudController::class,'update_data']);


