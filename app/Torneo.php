<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $fillable = [
        'nombre','created_at','updated_at'
    ];
}
