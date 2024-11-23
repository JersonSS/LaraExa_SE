<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMedicamentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required'
        ];
    }
    
    public function messages(): array
    {
        return [
            'nombre.required' => 'Error, ingrese el NOMBRE del medicamento',
            'descripcion.required' => 'Error, ingrese la DESCRIPCIÓN',
            'cantidad.required' => 'Error, ingrese la CANTIDAD',
            'cantidad.integer' => 'Error, la CANTIDAD debe ser un número entero',
            'cantidad.min' => 'Error, la CANTIDAD debe ser al menos 1',
            'precio.required' => 'Error, ingrese el PRECIO',
            'precio.numeric' => 'Error, el PRECIO debe ser un valor numérico',
            'precio.min' => 'Error, el PRECIO debe ser un valor positivo'
        ];
    }
}
