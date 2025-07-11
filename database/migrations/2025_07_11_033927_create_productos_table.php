<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('nombre');
            $table->string('nombre_extranjero')->nullable();
            $table->string('cod_grupo_producto');
            $table->string('nombre_grupo_producto');
            $table->string('sku_fabricante')->nullable();
            $table->string('nombre_fabricante');
            $table->string('nombre_proveedor');
            $table->decimal('peso', 8, 2);
            $table->string('unidad_medida');
            $table->decimal('precio_lista', 10, 2);
            $table->string('codigo_barra')->nullable();
            $table->string('sku_alternante')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
