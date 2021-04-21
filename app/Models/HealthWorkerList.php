<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

class HealthWorkerList extends Model

{
    use HasFactory;
    protected $guarded=[];
    public function workerUser()
        {
           return $this->belongsTo(User::class, 'User_Id', 'id');
        }
}
