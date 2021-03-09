<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class Section extends Model
{
    use HasFactory  , Uuids;
    public function enquete()
{
    return $this->hasOne('App\Models\Enquete');
}


public function question()
{
    return $this->belongsTo('App\Models\Question');
}
}
