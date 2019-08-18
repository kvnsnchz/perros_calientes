<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DimensionFecha extends Model
{
    protected $table = 'dimension_fechas';

    protected $fillable = [
        'fecha_id', 'dia', 'mes', 'año', 'segmento'
    ];
    
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
