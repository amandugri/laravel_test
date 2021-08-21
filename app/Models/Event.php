<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function Workshop()
    { 
        return $this->hasMany(Workshop::class, 'id','event_id'); 
    }
}
