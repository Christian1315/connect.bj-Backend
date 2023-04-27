<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginValidation extends FormRequest
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
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required', 'min:6'],
        ];
    }


    public function messages()
    {
        return  [
            'email.required' => 'Ce Champ est obligatoire',
            'email.required' => 'Ce Champ est obligatoire',
            'email.email' => 'Email invalid',
            'password.required' => 'Ce Champ est obligatoire',
            'password.min' => '6 caractères au moins',
            // 'accepted.accepted'=>'Veuillez accepter nos conditions'
        ];
    }
}
