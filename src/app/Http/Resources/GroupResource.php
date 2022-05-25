<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request):array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'number_of_students' => $this->number_of_students,
            'teachers' => $this->teachers,

        ];
    }
}
