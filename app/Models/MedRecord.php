<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedRecord extends Model
{
    use HasFactory;

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    public function surgeries()
    {
        return $this->hasMany('App\Models\Surgeries');
    }

    public function allergies()
    {
        return $this->hasMany('App\Models\Allergies');
    }
}
