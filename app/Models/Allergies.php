<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergies extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function med_record()
    {
        return $this->belongsTo('App\Models\MedRecord');
    }
}
