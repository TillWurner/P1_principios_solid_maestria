<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'sku',
        'nombre',
        'nombre_extranjero',
        'peso',
        'unidad_medida',
        'codigo_barra',
        'sku_alternante',
    ];

    // Relaciones
    public function grupo() {
        return $this->hasOne(GrupoProducto::class);
    }

    public function proveedor() {
        return $this->hasOne(ProveedorProducto::class);
    }

    public function mrp() {
        return $this->hasOne(MRPProducto::class);
    }

    public function precio() {
        return $this->hasOne(PrecioProducto::class);
    }
}
