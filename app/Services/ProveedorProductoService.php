<?php

namespace App\Services;

use App\Interfaces\GestorProveedorProductoInterface;
use App\Models\ProveedorProducto;
use App\Models\Producto;
use Illuminate\Support\Facades\Log;

class ProveedorProductoService implements GestorProveedorProductoInterface
{
    public function registrarProveedorProducto(Producto $producto, array $data): void
    {
        if (isset($data['nombre_proveedor'])) {
            $producto->proveedor()->create([
                'nombre_proveedor' => $data['nombre_proveedor'],
                'sku_fabricante' => $data['sku_fabricante'] ?? null,
                'nombre_fabricante' => $data['nombre_fabricante'] ?? null
            ]);

            Log::info("Proveedor registrado para producto: {$producto->sku}");
        }
    }
}
