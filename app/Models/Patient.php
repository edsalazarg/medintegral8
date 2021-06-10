<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function medrecord()
    {
        return $this->hasOne('App\Models\MedRecord');
    }

    public function psychquestionnaires()
    {
        return $this->hasOne('App\Models\PsychQuestionnaire');
    }

    public function appointment()
    {
        return $this->hasMany('App\Models\Appointment');
    }
}
