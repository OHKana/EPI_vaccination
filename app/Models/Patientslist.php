<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patientslist extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function patientsUser()
        {
           return $this->belongsTo(User::class, 'user_id', 'id');
        }
       
}
