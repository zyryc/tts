<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        "name","description","price","location","rating", "country", "image"
        ];
        
}
