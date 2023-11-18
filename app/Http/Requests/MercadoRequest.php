<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MercadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'titulo_id' => 'required|integer',
            'carteira_vendedora' => 'required|string',
            'carteira_compradora' => 'required|string',
            'data_hora' => 'required|date',
            'valor_operacao' => 'required|numeric',
            'quantidade' => 'required|integer',
            'valor_unitario' => 'required|numeric',
        ];
    }
}
