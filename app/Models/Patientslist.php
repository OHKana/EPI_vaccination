<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patientslist extends Model
{
    protected $guarded=[];
    use HasFactory;
protected $casts = [
    'from_date' => 'datetime',
    'to_date' => 'datetime',
];

    public function patientsUser()
        {
           return $this->belongsTo(User::class, 'user_id', 'id');
        }

}
