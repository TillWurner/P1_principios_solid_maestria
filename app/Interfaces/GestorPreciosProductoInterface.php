<?php
namespace App\Interfaces;

use App\Models\Producto;

interface GestorPreciosProductoInterface {
    public function registrarPrecioProducto(Producto $producto, array $data): void;
}
