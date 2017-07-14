<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    "name",
    ];

    public function products()
	{
		// return $this->hasMany('App\Product');
		return $this->hasMany(Product::class);
	}

	public function setNameAttribute($name)
	{
		return $this->attributes['name'] = ucwords($name);
	}

	public function getNameAttribute($name)
	{
		return ucwords($name);
	}
}

