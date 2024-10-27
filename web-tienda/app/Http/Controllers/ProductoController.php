<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //LISTAR GET
    public function index()
    {
        $baraja = Producto::all();
        return view('productos.index',compact('baraja'));
    }

    //REGISTRAR GET
    public function create()
    {
        return view('productos.create');
    }

    //REGISTRAR POST
    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->nombre=$request->nombre;
        $producto->marca=$request->marca;
        $producto->precio=$request->precio;
        $producto->fvencimiento=$request->fvencimiento;
        $producto->stock=$request->stock;

        $producto->save();

        return redirect('/productos');
    }

    //EDITAR GET
    public function edit(Producto $producto)
    {
        return view('productos.edit',compact('producto'));
    }

     //EDITAR GET
     public function update(Producto $producto ,Request $request)
     {

        $producto->nombre=$request->nombre;
        $producto->marca=$request->marca;
        $producto->precio=$request->precio;
        $producto->fvencimiento=$request->fvencimiento;
        $producto->stock=$request->stock;

        $producto->save();
        return redirect('/productos');
     }

     //BORRAR GET
     public function delete(Producto $producto) {
        return view('productos.delete',compact('producto'));
     }

     //BORRAR POST
     public function destroy(Producto $producto)
     {
        $producto->delete();
        return redirect('/productos');
     }

}
