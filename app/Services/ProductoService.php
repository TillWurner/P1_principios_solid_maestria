<?php

namespace App\Services;

use App\Models\Producto;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProductoService
{
//LOGICA DEL NEGOCIO

    public function registrarProducto(array $data): Producto
    {
        // Validación dentro del servicio
        $validator = Validator::make($data, [
            'sku' => 'required|unique:productos',
            'nombre' => 'required',
            'precio_lista' => 'required|numeric',
        ]);
        
        // Nueva funcionalidad añadida para auditoria
        //Log::info("Producto registrado: " . $producto->sku);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        //LLamamos al Modelo
        return Producto::create($data);
    }

    /*
    public function registrarProducto(array $data): Producto
    {
        return Producto::create($data);
    }

    */

     public function registrarGrupoProducto(string $codigo, string $nombre)
    {
        // lógica para grupo de producto
    }

    public function registrarProveedorProducto(string $proveedor)
    {
        // lógica para proveedor
    }

    public function registrarPrecioBaseProducto(float $precio)
    {
        // lógica para precios
    }

    public function registrarMinimoMaximoMRPAlmacen(int $min, int $max)
    {
        // lógica para MRP
    }

    public function getSkuAlternante(string $skuBase): array
    {
        return ['', '']; // alternantes genéricos
    }

}
