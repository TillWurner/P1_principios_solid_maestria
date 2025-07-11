@extends('adminlte::page')

@section('content')
<div class="card">
    <div class="card-header">Registrar Producto</div>
    <div class="card-body">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>SKU</label>
                <input type="text" name="sku" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nombre Extranjero</label>
                <input type="text" name="nombre_extranjero" class="form-control">
            </div>
            <div class="form-group">
                <label>Grupo Producto</label>
                <input type="text" name="cod_grupo_producto" class="form-control" required>
                <input type="text" name="nombre_grupo_producto" class="form-control mt-1" required>
            </div>
            <div class="form-group">
                <label>Fabricante / Proveedor</label>
                <input type="text" name="sku_fabricante" class="form-control">
                <input type="text" name="nombre_fabricante" class="form-control mt-1" required>
                <input type="text" name="nombre_proveedor" class="form-control mt-1" required>
            </div>
            <div class="form-group">
                <label>Peso</label>
                <input type="number" step="0.01" name="peso" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Unidad de Medida</label>
                <input type="text" name="unidad_medida" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Precio Lista</label>
                <input type="number" step="0.01" name="precio_lista" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Código de Barra</label>
                <input type="text" name="codigo_barra" class="form-control">
            </div>
            <div class="form-group">
                <label>SKU Alternante</label>
                <input type="text" name="sku_alternante" class="form-control">
            </div>
            <button class="btn btn-primary mt-3" type="submit">Guardar</button>
        </form>
    </div>
</div>
@endsection
