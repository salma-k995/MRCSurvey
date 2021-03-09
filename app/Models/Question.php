<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class Question extends Model
{
    use HasFactory  , Uuids;

    public function section()
    {
        return $this->hasOne('App\Models\Section');
    }

    
public function detailResponse()
{
    return $this->hasOne('App\Models\DsetailResponse');
}

public function propositionResponse()
{
    return $this->hasOne('App\Models\PropositionResponse');
}
}
