<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
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
            'Nombres' => 'required',
            'Email' => 'required',
            'Direccion' => 'required',
            'Fono' => 'required'
        ];
    }
    // las reglas  de validación
    public function messages(): array
    {
        return [
            'Nombres.required' => 'Es necesario su nombre.',
            'Email.required' => 'Es requerido el email.',
            'Direccion.required' => 'El campo dirección es necesario.',
            'Fono.required' => 'El campo fono es obligatorio.',
        ];
    }

}
