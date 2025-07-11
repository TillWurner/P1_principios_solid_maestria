<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
        protected $fillable = [
        'sku',
        'nombre',
        'nombre_extranjero',
        'cod_grupo_producto',
        'nombre_grupo_producto',
        'sku_fabricante',
        'nombre_fabricante',
        'nombre_proveedor',
        'peso',
        'unidad_medida',
        'precio_lista',
        'codigo_barra',
        'sku_alternante',
    ];
}
