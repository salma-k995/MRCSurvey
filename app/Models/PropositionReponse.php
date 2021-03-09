<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class PropositionReponse extends Model
{
    use HasFactory  , Uuids;
    
    public function details()
{
    return $this->belongsToMany('App\DetailResponse');
}
public function questions()
{
    return $this->belongsToMany('App\Question');
}

}
