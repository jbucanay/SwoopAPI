<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UniversityResource extends JsonResource
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
            'id'=>$this->id,
            'first_name'=> $this->last_name,
            'last_name'=> $this->last_name,
            'address'=> $this->address,
            'city'=> $this->city,
            'state'=>$this->state,
            'created_at'=>$this->created_at
        ];
    }
}
