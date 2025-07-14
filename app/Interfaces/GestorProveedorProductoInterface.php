<?php
namespace App\Interfaces;

use App\Models\Producto;

interface GestorProveedorProductoInterface {
    public function registrarProveedorProducto(Producto $producto, array $data): void;
}
