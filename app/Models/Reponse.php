<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class Reponse extends Model
{
    use HasFactory  , Uuids;

    public function detailResponse()
    {
        return $this->hasOne('App\Models\DetailResponse');
    }

    public function enquete()
    {
        return $this->hasOne('App\Models\Enquete');
    }
}
