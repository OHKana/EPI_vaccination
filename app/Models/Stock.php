<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function CvaccineName()
    {
       return $this->belongsTo(child_vaccine::class, 'child_v_id', 'id');
    }

    public function TvaccineName()
    {
       return $this->belongsTo(teenageVaccine::class, 'teenage_v_id', 'id');
    }
}

