<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    

    public function Items()
    { 
        return $this->hasMany(MenuItem::class, 'id','parent_id'); 
    }
}
