<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignupRequest extends FormRequest
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
            'username' => ['required', 'string', 'min:5', 'max:20','unique:users'],
            'name' => ['required', 'string', 'min:2', 'max:225'],
           // 'email' => ['required', 'string', 'min:10', 'max:225','unique:users'],
            'password' => ['required', 'confirmed', Password::default()],


        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El nombre de usuario es obligatorio',
            'username.min' => 'El nombre de usuario debe de tener como minimo 5 caracteres',
            'username.max' => 'El nombre de usuario es debe de tener como minimo 20 caracteres',
            'username.unique' => 'El nombre de usuario ya existe en el sistema',

            'name.required' => 'El nombre completo es obligatorio',
            'name.min' => 'El nombre completo debe de etner como minimo 3 caracteres',
            'name.max' => 'El nombre completo debe de tener como minimo 255 caracteres',

        ];
    }
}
