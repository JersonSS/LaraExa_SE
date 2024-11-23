<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMascotaRequest extends FormRequest
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
            'nombre'=> 'required',
            'especie'=> 'required',
            'raza'=> 'required',
            'genero'=> 'required',
            'edad'=> 'required',
            'color'=> 'required'
        ];
    }

    public function attributes(): array
    {
        return [
            'nombre'=> 'NAME',
            'especie'=> 'ESPECIMEN',
            'raza'=> 'RAZA',
            'genero'=> 'GENERO',
            'edad'=> 'DATE',
            'color'=> 'COLOR'
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'=> 'Error, ingrese el NOMBRE',
            'especie.required'=> 'Error, ingrese la ESPECIE',
            'raza.required'=> 'Error, ingrese la RAZA',
            'genero.required'=> 'Error, ingrese el GENERO',
            'edad.required'=> 'Error, Ingrese la EDAD',
            'color.required'=> 'Error, ingrese el COLOR'
        ];
    }
}
