<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePropietarioRequest extends FormRequest
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
            'dni' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'dni.required' => 'Error, ingrese el DNI',
            'dni.numeric' => 'Error, el DNI debe ser un valor numérico',
            'dni.digits' => 'Error, el DNI debe tener 8 dígitos',
            'nombre.required' => 'Error, ingrese el NOMBRE',
            'apellido.required' => 'Error, ingrese el APELLIDO',
            'telefono.required' => 'Error, ingrese el TELÉFONO',
            'telefono.numeric' => 'Error, el TELÉFONO debe ser un valor numérico',
            'correo.required' => 'Error, ingrese el CORREO',
            'correo.email' => 'Error, ingrese un CORREO válido'
        ];
    }

}
