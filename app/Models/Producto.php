<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use App\Interfaces\ProductoBasicoInterface;
use App\Interfaces\GestorGrupoProductoInterface;
use App\Interfaces\GestorProveedorProductoInterface;
use App\Interfaces\GestorMRPProductoInterface;
use App\Interfaces\GestorPreciosProductoInterface;

class Producto extends Model implements
    ProductoBasicoInterface,
    GestorGrupoProductoInterface,
    GestorProveedorProductoInterface,
    GestorMRPProductoInterface,
    GestorPreciosProductoInterface
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

    public function registrarGrupoProducto(): void
    {
        if ($this->cod_grupo_producto && $this->nombre_grupo_producto) {
            Log::info("Registrando grupo de producto: {$this->cod_grupo_producto} - {$this->nombre_grupo_producto}");
        }
    }

    public function registrarProveedorProducto(): void
    {
        if ($this->nombre_proveedor) {
            Log::info("Registrando proveedor: {$this->nombre_proveedor} para el producto {$this->sku}");
        }
    }

    public function registrarMinimoMaximoMRPAlmacen(): void
    {
        Log::info("Registrando mínimo/máximo MRP para el producto {$this->sku}");
    }

    public function registrarPrecioBaseProducto(): void
    {
        Log::info("Registrando precio base para el producto {$this->sku}");
    }

    public function getSkuAlternante(string $cSkuBase): array
    {
        return ["", ""];
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPrecioLista(): float
    {
        return (float) $this->precio_lista;
    }
}
