<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    public function index_GET() {
        $listaMedicamentos = Medicamento::all();
        return view('Medicamento.indexMM',compact('listaMedicamentos'));
    }
}
