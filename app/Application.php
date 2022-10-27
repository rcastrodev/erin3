<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['name', 'telephone', 'icon', 'order', 'image', 'image_small'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
