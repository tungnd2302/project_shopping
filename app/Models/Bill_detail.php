<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Bill;
use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    protected $table = 'bill_detail';

    protected function products(){
        return $this->belongsToMany(Bill_detail::class,'product_billDetail','bill_detail_id','product_id');
    }

    protected function bill(){
    	return $this->belongsTo(Bill::class);
    }
}
