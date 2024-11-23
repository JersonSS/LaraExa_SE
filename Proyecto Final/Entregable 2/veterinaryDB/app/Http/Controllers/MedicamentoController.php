<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicamentoRequest;
use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    //LISTAR GET
 public function index()
 {
     $listaMedicamentos = Medicamento::all();
     return view('Medicamento.index',compact('listaMedicamentos'));
 }

  /***************************** REGISTRAR ******************************* */
 //REGISTRAR GET
 //Mandar la vista o el formulario para que sea llenado
 public function create()
 {
     return view('Medicamento.create');
 }

 //REGISTRAR POST
 public function store(CreateMedicamentoRequest $request)
 {

     Medicamento::create($request->all());
     return redirect('/medicamentos');
 }


 /***************************** EDITAR ******************************* */
 //EDITAR GET
 public function edit(Medicamento $medicamento)
 {
     return view('Medicamento.edit',compact('medicamento'));
 }

  //EDITAR POST
  public function update(Medicamento $medicamento ,CreateMedicamentoRequest $request)
  {
     $medicamento->update($request->all());
     return redirect('/medicamentos');
  }


  /***************************** ELIMINAR ******************************* */

  //BORRAR GET
  public function delete(Medicamento $medicamento) {
     return view('Medicamento.delete',compact('medicamento'));
  }

  //BORRAR POST
  public function destroy(Medicamento $medicamento)
  {
     $medicamento->delete();
     return redirect('/medicamentos');
  }
}
