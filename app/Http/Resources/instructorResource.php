<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class instructorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'=> $this->name,
            'lastname'=>$this->lastname,
            'education'=>$this->education,
            'rfc'=>$this->rfc,
            'sex'=>$this->sex,
        ];
    }
}
