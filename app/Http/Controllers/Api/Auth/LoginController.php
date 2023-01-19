<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends ApiController
{
    public function __invoke(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');
        if (!Auth::attempt($credentials)) {
            return $this->returnWrong('something went wrong plz check username or password');
        }
        $user = User::where('username' , $request->username)->firstOrFail();
        $token = $user->createToken($request->username)->plainTextToken;
        return $this->returnJSON( ['user'=>$user,'token' => $token]);
    }
}
