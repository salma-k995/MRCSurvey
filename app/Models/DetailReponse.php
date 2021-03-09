<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class DetailReponse extends Model
{
    use HasFactory  , Uuids;

    public function propositions()
{
    return $this->belongsToMany('App\Proposition');
}

public function responses()
{
    return $this->belongsToMany('App\Response');
}

public function questions()
{
    return $this->belongsToMany('App\Question');
}
}
