<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProveedorProducto extends Model
{
    protected $fillable = [
        'sku_fabricante',
        'nombre_fabricante',
        'nombre_proveedor',
        'producto_id', // Clave foránea
    ];

    public function producto() {
        return $this->belongsTo(Producto::class);
    }
}
