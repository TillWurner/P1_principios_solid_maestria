<?php

namespace App\Services;

use App\Interfaces\GestorGrupoProductoInterface;
use App\Models\Producto;
use Illuminate\Support\Facades\Log;

class GrupoProductoService implements GestorGrupoProductoInterface
{
    public function registrarGrupoProducto(Producto $producto, array $data): void
    {
        if (isset($data['cod_grupo_producto'])) {
            $producto->grupo()->create([
                'cod_grupo_producto' => $data['cod_grupo_producto'],
                'nombre_grupo_producto' => $data['nombre_grupo_producto']
            ]);

            Log::info("Grupo registrado para producto: {$producto->sku}");
        }
    }
}
