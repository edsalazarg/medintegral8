<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        "location",
        "transfer",
        "notes",
        "blood_pressure",
        "heart_rate",
        "rheumatoid_factor",
        "temperature",
        "sat_o2",
        "glucose",
        "insulin",
        "skin_thickness",
        "bmi",
        "dpf",
        "glasgow",
        "neurologic",
        "head",
        "neck",
        "cardiopulmonary",
        "abdomen",
        "extremities",
        "diagnosis",
        "condition",
        "treatment",
        "forecast"
        ];

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
