<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropietarioRequest;
use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index() {
        $listaPropietarios = Propietario::all();
        return view('Propietario.index',compact('listaPropietarios'));
    }

     /***************************** REGISTRAR ******************************* */
 //REGISTRAR GET
 //Mandar la vista o el formulario para que sea llenado
 public function create()
 {
     return view('Propietario.create');
 }

 //REGISTRAR POST
 public function store(CreatePropietarioRequest $request)
 {

     Propietario::create($request->all());
     return redirect('/propietarios');
 }


 /***************************** EDITAR ******************************* */
 //EDITAR GET
 public function edit(Propietario $propietario)
 {
     return view('Propietario.edit',compact('propietario'));
 }

  //EDITAR POST
  public function update(Propietario $propietario ,CreatePropietarioRequest $request)
  {
     $propietario->update($request->all());
     return redirect('/propietarios');
  }


  /***************************** ELIMINAR ******************************* */

  //BORRAR GET
  public function delete(Propietario $propietario) {
     return view('Propietario.delete',compact('propietario'));
  }

  //BORRAR POST
  public function destroy(Propietario $propietario)
  {
     $propietario->delete();
     return redirect('/propietarios');
  }
}
