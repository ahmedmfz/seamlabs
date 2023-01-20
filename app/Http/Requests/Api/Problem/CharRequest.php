<?php

namespace App\Http\Requests\Api\Problem;

use App\Http\Requests\Api\BaseApiRequest;

class CharRequest extends BaseApiRequest
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
            'input_string'     => 'required|regex:/^[A-Z]+$/',
        ];
    }
    
    public function messages()
    {
        return [
            'input_string.regex' => 'please enter valid and Capital Char Like AAA , VDB'
        ];
    }

}
