<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MRPProducto extends Model
{
    protected $fillable = [
        'peso',
        'unidad_medida',
        'codigo_barra',
        'producto_id', // Clave foránea
    ];

    public function producto() {
        return $this->belongsTo(Producto::class);
    }
}
