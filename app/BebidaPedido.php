<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BebidaPedido extends Model
{
    protected $table = 'bebidas_pedidos';

    protected $fillable = [
        'cantidad', 'bebida_id', 'pedido_id'
    ];
}
