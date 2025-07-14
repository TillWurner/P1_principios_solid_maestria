<?php

namespace App\Services;

use App\Models\Producto;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Interfaces\ProductoBasicoInterface;


class ProductoService implements ProductoBasicoInterface
{
    public function __construct(
        private GrupoProductoService $grupoService,
        private ProveedorProductoService $proveedorService,
        private MRPProductoService $mrpService,
        private PrecioProductoService $precioService
    ) {}

    public function registrarProducto(array $data): Producto
    {
        $validator = Validator::make($data, [
            'sku' => 'required|unique:productos',
            'nombre' => 'required',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        // Crear producto base
        $producto = Producto::create($data);

        // Delegar lógica específica a otros servicios
        $this->grupoService->registrarGrupoProducto($producto, $data);
        $this->proveedorService->registrarProveedorProducto($producto, $data);
        $this->mrpService->registrarMRPProducto($producto, $data);
        $this->precioService->registrarPrecioProducto($producto, $data);

        return $producto;
    }

    // Implementación de ProductoBasicoInterface
    public function getSku(): string
    {
        return $this->getSku();
    }

    public function getNombre(): string
    {
        return $this->getNombre();
    }

    public function getPrecioLista(): float
    {
        return $this->getPrecioLista();
    }
}
