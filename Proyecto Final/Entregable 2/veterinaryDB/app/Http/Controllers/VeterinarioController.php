<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVeterinarioRequest;
use App\Models\Veterinario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function index() {
        $listaVeterinarios = Veterinario::all();
        return view('Veterinario.index',compact('listaVeterinarios'));
    }

     /***************************** REGISTRAR ******************************* */
 //REGISTRAR GET
 //Mandar la vista o el formulario para que sea llenado
 public function create()
 {
     return view('Veterinario.create');
 }

 //REGISTRAR POST
 public function store(CreateVeterinarioRequest $request)
 {

     Veterinario::create($request->all());
     return redirect('/veterinarios');
 }


 /***************************** EDITAR ******************************* */
 //EDITAR GET
 public function edit(Veterinario $veterinario)
 {
     return view('Veterinario.edit',compact('veterinario'));
 }

  //EDITAR POST
  public function update(Veterinario $veterinario ,CreateVeterinarioRequest $request)
  {
     $veterinario->update($request->all());
     return redirect('/veterinarios');
  }


  /***************************** ELIMINAR ******************************* */

  //BORRAR GET
  public function delete(Veterinario $veterinario) {
     return view('Veterinario.delete',compact('veterinario'));
  }

  //BORRAR POST
  public function destroy(Veterinario $veterinario)
  {
     $veterinario->delete();
     return redirect('/veterinarios');
  }
}
