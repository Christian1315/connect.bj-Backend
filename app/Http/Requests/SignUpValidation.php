<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SignUpValidation extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['required', 'email:rfc,dns',Rule::unique('users','email')],
            'password' => ['required', 'min:6'],
            'password' => ['required', 'min:6', 'confirmed'],
            'password_confirmation' => 'required',
            'country' => ['required'],
            'city' => ['required'],
            'house' => ['required'],
            'phone' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'Ce champ est obligatoire',
            'lastname.required' => 'Ce champ est obligatoire',
            'email.required' => 'Ce champ est obligatoire',
            'email.email' => 'Email invalid',
            'email.unique' => "Cet email existe déjà",
            'password.required' => "Password réquis",
            'password.min' => "Au moins 6 caractères",
            'password.confirmed' => "Le password n'est pas conforme",
            'password_confirmation.required' => "Ce champ est réquis",
            'country.required' => "Ce champ est obligatoire",
            'city.required' => "Ce champ est obligatoire",
            'house.required' => "Ce champ est obligatoire",
            'phone.required' => "Ce champ est obligatoire",
        ];
    }
}
