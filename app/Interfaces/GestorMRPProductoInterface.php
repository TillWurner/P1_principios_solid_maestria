<?php
namespace App\Interfaces;

use App\Models\Producto;

interface GestorMRPProductoInterface {
    public function registrarMRPProducto(Producto $producto, array $data): void;
}
