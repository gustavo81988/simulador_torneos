<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
