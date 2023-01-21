<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\User\GetUserRequest;
use App\Http\Requests\Api\User\UpdateRequest;
use App\Http\Resources\User\UserCollection;
use App\Http\Resources\User\UserResource;
use App\Models\User;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();
        return $this->returnJSON(new UserCollection($users));
    }

    /**
     * Display the specified resource.
     *
     * @param   \Illuminate\Http\GetUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function getUser(GetUserRequest $request)
    {
        $user = User::where('id' , $request->id)->firstOrFail();
        return $this->returnJSON(new UserResource($user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateRequest  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return $this->returnSuccess('User Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return $this->returnSuccess();
    }
    
}
