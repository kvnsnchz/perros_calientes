<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salchicha extends Model
{
    protected $table = 'salchichas';

    protected $fillable = [
        'nombre'
    ];
}
