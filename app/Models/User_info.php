<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class User_info extends Model
{
    protected $table = 'user_info';

    protected function user()
    {
    	return $this->belongsto(User::class);
    }
}
