<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Product extends Model
{
    protected $fillable = ['name','details','stock','price','discount'];
    public function reviews()
    {
    	return $this->hasMany(Review::class);
    }
    public function reviews2()
    {
    	return $this->hasMany(Review::class);
    }

     public function reviews3()
    {
    	return $this->hasMany(Review::class);
    }
}
