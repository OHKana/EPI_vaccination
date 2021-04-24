<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildVaccineSchedule extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function vaccineName()
        {
           return $this->belongsTo(child_vaccine::class, 'cv_id', 'id');
        }
}
