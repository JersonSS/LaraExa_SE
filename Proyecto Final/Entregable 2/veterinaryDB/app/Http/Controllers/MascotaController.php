<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;

use App\Http\Requests\CreateMascotaRequest;

class MascotaController extends Controller
{
 //LISTAR GET
 public function index()
 {
     $listaMascotas = Mascota::all();
     return view('Mascota.index',compact('listaMascotas'));
 }

  /***************************** REGISTRAR ******************************* */
 //REGISTRAR GET
 //Mandar la vista o el formulario para que sea llenado
 public function create()
 {
     return view('Mascota.create');
 }

 //REGISTRAR POST
 public function store(CreateMascotaRequest $request)
 {

     Mascota::create($request->all());
     return redirect('/mascotas');
 }


 /***************************** EDITAR ******************************* */
 //EDITAR GET
 public function edit(Mascota $mascota)
 {
     return view('Mascota.edit',compact('mascota'));
 }

  //EDITAR POST
  public function update(Mascota $mascota ,CreateMascotaRequest $request)
  {
     $mascota->update($request->all());
     return redirect('/mascotas');
  }


  /***************************** ELIMINAR ******************************* */

  //BORRAR GET
  public function delete(Mascota $mascota) {
     return view('Mascota.delete',compact('mascota'));
  }

  //BORRAR POST
  public function destroy(Mascota $mascota)
  {
     $mascota->delete();
     return redirect('/mascotas');
  }
}
