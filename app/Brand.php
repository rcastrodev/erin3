<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['order', 'name', 'icon'];

    public function productsBrands()
    {
        return $this->belongsToMany(Product::class);
    }
}
