<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\ItemResource;


class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static $wrap = 'order';

    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'order_id' => $this->id,
            'order_voucherno' => $this->voucherno,
            'order_total' => $this->total,
            'order_user' => new UserResource(User::find($this->user_id)),
            'order_items' => ItemResource::collection($this->items),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
