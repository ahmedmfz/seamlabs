<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'       => $this->id,
            'username' => $this->username,
            'email'    => $this->email,
            'phone'    => $this->phone_number,
            'birthday' => $this->date_of_birth
        ];
    }
}
