<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ["name", "file_path", "created_at", "updated_at"];

    //Accessor:-
    function getNameAttribute($value){
        return ucFirst($value);
    }

    function getPriceAttribute($value){
        return $value.",Indian Rupees";
    }

    //Mutator:-
    function setNameAttribute($value){
        return $this->attributes['name']='Mr.'.$value;
    }

    function setPriceAttribute($value){
        return $this->attributes['price']='Indian Rupees'.$value;
    }
}
