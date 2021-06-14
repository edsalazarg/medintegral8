<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsychQuestionnaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'self_employed',
        'family_history',
        'work_interfere',
        'no_employees',
        'remote_work',
        'tech_company',
        'benefits',
        'care_options',
        'wellness_program',
        'seek_help',
        'anonymity',
        'leave',
        'mentalhealthconsequence',
        'physhealthconsequence',
        'coworkers',
        'supervisor',
        'mentalhealthinterview',
        'physhealthinterview',
        'mentalvsphysical',
        'obs_consequence'
    ];

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
