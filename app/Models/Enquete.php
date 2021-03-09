<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class Enquete extends Model
{
    use HasFactory , Uuids;

    
public function section()
{
    return $this->belongsTo('App\Models\Section');
}

public function reponse()
{
    return $this->belongsTo('App\Models\Reponse');
}

public function categorie()
{
    return $this->hasOne('App\Models\Categorie');
}
}
