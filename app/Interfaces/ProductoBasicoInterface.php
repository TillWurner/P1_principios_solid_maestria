<?php
namespace App\Interfaces;
interface ProductoBasicoInterface {
    public function getSku(): string;
    public function getNombre(): string;
    public function getPrecioLista(): float;
}
