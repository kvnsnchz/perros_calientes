<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredienteEliminado extends Model
{
    protected $table = 'ingredientes_eliminados';

    protected $fillable = [
        'pedido_id', 'ingrediente_id'
    ];
}
