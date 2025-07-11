<?php

namespace App\Services;

use App\Models\Producto;

class ProductoService
{
    public function registrarProducto(array $data): Producto
    {
        return Producto::create($data);
    }

     public function registrarGrupoProducto(string $codigo, string $nombre)
    {
        // lógica futura para grupo de producto
    }

    public function registrarProveedorProducto(string $proveedor)
    {
        // lógica futura para proveedor
    }

    public function registrarPrecioBaseProducto(float $precio)
    {
        // lógica futura para precios
    }

    public function registrarMinimoMaximoMRPAlmacen(int $min, int $max)
    {
        // lógica futura para MRP
    }

    public function getSkuAlternante(string $skuBase): array
    {
        return ['', '']; // alternantes genéricos
    }

}
