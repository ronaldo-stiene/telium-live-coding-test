<?php

namespace App\Http\Resources\Store\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->product_id,
            'name' => $this->name,
            'price' => $this->price,
            'active' => $this->active,
            'suppliers' => $this->suppliers
        ];
    }
}
