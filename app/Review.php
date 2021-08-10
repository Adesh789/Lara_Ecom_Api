<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Review extends Model
{
    public function productRel()
    {
        return $this->belongsTo('App\Product');
    }
}
