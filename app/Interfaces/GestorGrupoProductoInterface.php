<?php
namespace App\Interfaces;

use App\Models\Producto;

interface GestorGrupoProductoInterface {
    public function registrarGrupoProducto(Producto $producto, array $data): void;
}
