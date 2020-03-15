<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Image;
use App\User;
use App\Models\Bill_detail;

class Product extends Model
{
    protected $table = 'products';

    public function category()
    {
    	return $this->belongsto(Category::class);
    }

    public function images()
    {
    	return $this->hasMany(Image::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function bill_detail(){
        return $this->belongsTo(Bill_detail::class);
    }

}
