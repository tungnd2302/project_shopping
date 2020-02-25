<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\User;

class Category extends Model
{
    protected $table = 'categories';

    protected function products()
    {
    	return $this->hasMany(Product::class);
    }

    protected function user(){
    	return $this->belongsTo(User::class);
    }
}
