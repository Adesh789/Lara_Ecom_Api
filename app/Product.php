<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'stock', 'discount'
    ];

    public function reviewRel()
    {
        return $this->hasMany('App\Review');
    }
}
