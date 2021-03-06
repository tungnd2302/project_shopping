<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\User;

class Category extends Model
{
    protected $table = 'categories';

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
