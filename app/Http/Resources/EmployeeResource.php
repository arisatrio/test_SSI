<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'id'            => $this->id,
            'id_employee'   => $this->id_employee,
            'name'          => $this->name,
            'email'         => $this->email,
            'gender'        => $this->gender,
            'address'       => $this->address,
        ];
    }
}
