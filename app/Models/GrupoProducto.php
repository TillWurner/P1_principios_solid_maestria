<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoProducto extends Model
{
    protected $fillable = [
        'cod_grupo_producto',
        'nombre_grupo_producto',
        'producto_id', // Clave foránea
    ];

    public function producto() {
        return $this->belongsTo(Producto::class);
    }

    
}

