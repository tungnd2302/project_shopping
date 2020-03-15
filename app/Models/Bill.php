<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bill_detail;
class Bill extends Model
{
    protected $table = 'bills';

    public function bill_detail(){
    	return $this->hasMany(Bill_detail::class);
    }
}
