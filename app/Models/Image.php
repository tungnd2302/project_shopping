<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Image extends Model
{
    protected $table = 'images';

    public function product()
    {
    	return $this->belongsto(Product::class);
    }
}
