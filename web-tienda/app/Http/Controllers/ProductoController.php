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

     /***************************** REGISTRAR ******************************* */
    //REGISTRAR GET
    //Mandar la vista o el formulario para que sea llenado
    public function create()
    {
        return view('productos.create');
    }

    //REGISTRAR POST
    public function store(Request $request)
    {
        //VALIDACION
        $request->validate([
            'nombre'=> 'required',
            'marca'=> 'required',
            'precio'=> 'required',
            'fvencimiento'=> 'required',
            'stock'=> 'required'
        ]);

        /*
        $producto = new Producto();

        $producto->nombre=$request->nombre;
        $producto->marca=$request->marca;
        $producto->precio=$request->precio;
        $producto->fvencimiento=$request->fvencimiento;
        $producto->stock=$request->stock;

        $producto->save();
        */

        Producto::create($request->all());
        return redirect('/productos');
    }


    /***************************** EDITAR ******************************* */
    //EDITAR GET
    public function edit(Producto $producto)
    {
        return view('productos.edit',compact('producto'));
    }

     //EDITAR POST
     public function update(Producto $producto ,Request $request)
     {

         //VALIDACION
         $request->validate([
            'nombre'=> 'required',
            'marca'=> 'required',
            'precio'=> 'required',
            'fvencimiento'=> 'required',
            'stock'=> 'required'
        ]);
       /* $producto->nombre=$request->nombre;
        $producto->marca=$request->marca;
        $producto->precio=$request->precio;
        $producto->fvencimiento=$request->fvencimiento;
        $producto->stock=$request->stock;

        $producto->save();*/
        $producto->update($request->all());
        return redirect('/productos');
     }


     /***************************** ELIMINAR ******************************* */

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
