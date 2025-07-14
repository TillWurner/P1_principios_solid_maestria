<?php

namespace App\Services;

use App\Interfaces\GestorMRPProductoInterface;
use App\Models\MRPProducto;
use App\Models\Producto;
use Illuminate\Support\Facades\Log;

class MRPProductoService implements GestorMRPProductoInterface
{
    public function registrarMRPProducto(Producto $producto, array $data): void
    {
        if (isset($data['minimo']) && isset($data['maximo'])) {
            $producto->mrp()->create([
                'minimo' => $data['minimo'],
                'maximo' => $data['maximo'],
                'punto_reorden' => $data['punto_reorden'] ?? null
            ]);

            Log::info("MRP registrado para producto: {$producto->sku}");
        }
    }
}
