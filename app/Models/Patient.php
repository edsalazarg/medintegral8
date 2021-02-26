<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['firstName', 'lastName', 'department', 'age', 'position',
        'telephone', 'emergency_contact', 'site', 'email'];
    use HasFactory;

    public function medrecord()
    {
        return $this->hasOne('App\Models\MedRecord');
    }

    public function appointment()
    {
        return $this->hasMany('App\Models\Appointment');
    }
}
