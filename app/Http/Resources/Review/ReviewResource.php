<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $product = new Product;
        return [
            'id' => $this->id,
            'customer' => $this->customer,
            'image' => ''/*$product->image*/,
            'body' => $this->review,
            'star' => $this->star
        ];
    }
}
