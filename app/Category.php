<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['order', 'name', 'image'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
