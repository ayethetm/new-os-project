<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            "category_id"=>$this->id,
            "category_name"=>$this->name,
            "category_photo"=>url($this->photo)
            //with current application domain address
        ];
    }
}
