<?php

namespace App;

use App\Brand;
use App\Color;
use App\Category;
use App\Application;
use App\ProductPicture;
use App\VariableProduct;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'keywords',  'description', 'data_sheet', 'main_features', 'technical_characteristics', 'extra1', 'extra2'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductPicture::class);
    }

    public function applications()
    {
        return $this->belongsToMany(Application::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }
}
