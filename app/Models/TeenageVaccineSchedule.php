<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeenageVaccineSchedule extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function vaccineName()
        {
           return $this->belongsTo(teenageVaccine::class, 'tv_id', 'id');
        }
}
