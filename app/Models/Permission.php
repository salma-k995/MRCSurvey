<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class Permission extends Model
{
    use HasFactory  , Uuids;
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
  
     public function users() {
     
        return $this->belongsToMany('App\User');
            
     }
}
