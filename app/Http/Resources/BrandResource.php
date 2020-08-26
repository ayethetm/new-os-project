<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
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
        //define new return 
        return[
            "brand_id"=>$this->id,
            "brand_name"=>$this->name,
            "brand_photo"=>url($this->photo)
            //with current application domain address
        ];
    }
}
