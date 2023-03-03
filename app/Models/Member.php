<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    use HasFactory;

    //Accessor:-
    function getNameAttribute($value){
        return ucFirst($value);
    }
}
