<?php

namespace App\Http\Requests\Api\Auth;

use App\Http\Requests\Api\BaseApiRequest;

class RegisterRequest extends BaseApiRequest
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
            'username'      => 'required|string|unique:users,username',
            'email'         => 'required|email|unique:users,email',
            'date_of_birth' => 'required|date|before:today',
            'phone_number'  => 'required|numeric|unique:users,phone_number',
            'password'      => 'required|min:3|max:30',
        ];
    }
}