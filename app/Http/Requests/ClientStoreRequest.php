<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:150|string',
            'birthday' => 'required|date',
            'cpf' => 'required|cpf_ou_cnpj',
            'telephone' => 'required|string|celular_com_ddd',
            'email' => 'required|string|email',
            'adress' => 'required|string',
            'numberhouse' => 'string',
            'city' => 'required|string',
            'observation' => 'string'
        ];
    }
}
