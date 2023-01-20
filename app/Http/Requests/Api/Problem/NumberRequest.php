<?php

namespace App\Http\Requests\Api\Problem;

use App\Http\Requests\Api\BaseApiRequest;

class NumberRequest extends BaseApiRequest
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
            'start'   => 'required|integer',
            'end'     => 'required|integer|gt:start',
        ];
    }


}
