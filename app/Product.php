<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    "image",
    "size",
    "category_id",
    "title",
    "description",
    "price"
    ];

    public function categories()
    {
    	return $this->belongsTo(Category::class);
    }

    public function setTitleAttribute($value)
    {
        return $this->attributes['title'] = ucwords($value);
    }
}
