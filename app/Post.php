<?php

namespace App;

use App\Page;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['page_id', 'order', 'image', 'title', 'content1', 'extra1'];

    public function category()
    {
        return $this->belongsTo(Page::class);
    }
}
