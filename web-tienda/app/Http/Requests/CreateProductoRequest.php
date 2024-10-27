<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductoRequest extends FormRequest
{

    public function authorize(): bool
    {
        //poner el return en true Indicando que se usara el metodo rules 
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
            'marca'=> 'required',
            'precio'=> 'required',
            'fvencimiento'=> 'required',
            'stock'=> 'required'
        ];
    }

    public function attributes(): array
    {
        return [
            'nombre'=> 'NAME',
            'marca'=> 'BRAND',
            'precio'=> 'PRICE',
            'fvencimiento'=> 'EXPIRATION DATE',
            'stock'=> 'STOCK'
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'=> 'Error, ingrese NOM ',
            'marca.required'=> 'Error, ingrese MARQUE ',
            'precio.required'=> 'Error, ingrese PRIX ',
            'fvencimiento.required'=> 'Error, ingrese DATE DE PEREMPTION ',
            'stock.required'=> 'Error ,ASTION.'
        ];
    }
}
