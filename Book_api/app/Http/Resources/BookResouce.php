<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            "title"=>$this->title,
            "body"=>$this->body,
            "created_at"=>$this->created_at->format('j,l F y | h:i:s A') ,
            "updated_at"=>$this->updated_at->format('j,l F y | h:i:s A'),
        ];
    }
}
