<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    protected $table = 'perros';

    protected $fillable = [
        'nombre', 'precio', 'salchicha_id'
    ];
}
