<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCampeonatoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'string',
            'id_pais' => 'array',
            'id_pais.*' => 'exists:paises,id'
        ];
    }

    public function messages()
    {
        return [
            'nome.string' => 'O campo nome é inválido',
            'id_pais.array' => 'O campo id_pais é inválido'
        ];
    }
}
