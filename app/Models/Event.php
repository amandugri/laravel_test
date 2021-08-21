<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function Workshop()
    { 
        return $this->hasOne(Workshop::class, 'id','event_id'); 
    }

    public function Workshops()
    { 
        return $this->hasMany(Workshop::class); 
    }
}
