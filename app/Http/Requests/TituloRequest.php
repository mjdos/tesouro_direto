<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TituloRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string',
            'descricao' => 'required|string',
        ];
    }
}

