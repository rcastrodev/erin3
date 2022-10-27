<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Represented extends Model
{
    protected $fillable = ['name','image', 'order'];
}
