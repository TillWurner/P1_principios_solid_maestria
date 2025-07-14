<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrecioProducto extends Model
{
    protected $fillable = [
        'precio_lista',
        'moneda',
        'producto_id', // Clave foránea
    ];

    public function producto() {
        return $this->belongsTo(Producto::class);
    }
}
