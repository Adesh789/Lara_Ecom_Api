<?php

namespace App\Http\Resources\Product;

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
            
            'name' => $this->name, 
            'description' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount .'%',
            'totalPrice' => round((1 - ($this->discount/100)) * $this->price, 2),
            'stock' => $this->stock == 0 ? 'Out of Stock' : $this->stock,
            'ratings' => $this->reviewRel->count() > 0 ? round($this->reviewRel->sum('star')/$this->reviewRel->count(), 2) : 'No Reviews yet',
            'href' => [
                'reviews' => route('reviews.index', $this->id)
            ]
        ];
    }
}
