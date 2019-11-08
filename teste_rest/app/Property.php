<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'address','district','municipio','state','zipcode','tipo','owner'
    ];
}
