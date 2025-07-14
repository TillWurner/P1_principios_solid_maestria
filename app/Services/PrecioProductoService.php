<?php

namespace App\Services;

use App\Interfaces\GestorPreciosProductoInterface;
use App\Models\PrecioProducto;
use App\Models\Producto;
use Illuminate\Support\Facades\Log;

class PrecioProductoService implements GestorPreciosProductoInterface
{
    public function registrarPrecioProducto(Producto $producto, array $data): void
    {
        if (isset($data['precio_lista'])) {
            $producto->precio()->create([
                'precio_lista' => $data['precio_lista'],
                'moneda' => $data['moneda'] ?? 'USD',
                'descuento' => $data['descuento'] ?? 0
            ]);

            Log::info("Precio registrado para producto: {$producto->sku}");
        }
    }
}
