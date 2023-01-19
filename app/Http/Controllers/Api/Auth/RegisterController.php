<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Models\User;


class RegisterController extends ApiController
{
    public function __invoke(RegisterRequest $request)
    {
        User::create($request->validated());
        return $this->returnSuccess('You Register Successfully');
    }
}
