<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgeries extends Model
{
    use HasFactory;

    public function medrecord()
    {
        return $this->belongsTo('App\Models\MedRecord');
    }
}
