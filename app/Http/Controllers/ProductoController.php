<?php

namespace App\Http\Controllers;

/*use App\Models\Producto;*/
use App\Services\ProductoService;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    protected $productoService;

    public function __construct(ProductoService $productoService)
    {
        $this->productoService = $productoService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     /*   $productos = Producto::all();*/
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required|unique:productos',
            'nombre' => 'required',
            'precio_lista' => 'required|numeric',
        ]);

        $this->productoService->registrarProducto($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       /* $producto = Producto::findOrFail($id);*/
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       /* $producto = Producto::findOrFail($id); */
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      /*  $producto = Producto::findOrFail($id);  */
/*
        $request->validate([
            'sku' => 'required|unique:productos,sku,' . $producto->id,
            'nombre' => 'required',
            'precio_lista' => 'required|numeric',
        ]);
*/
        /*$producto->update($request->all());*/

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      /*  $producto = Producto::findOrFail($id); */
        /*$producto->delete();*/

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente');
    }
}
