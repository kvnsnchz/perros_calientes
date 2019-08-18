<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    protected $table = 'bebidas';

    protected $fillable = [
        'nombre', 'precio'
    ];
}
