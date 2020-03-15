<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\User_info;

class Role extends Model
{
	protected $table = 'roles';

    public function users(){
        return $this->belongsToMany(User::class,'user_info','role_id','user_id');
    }
}
