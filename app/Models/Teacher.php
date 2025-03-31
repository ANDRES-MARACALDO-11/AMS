<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{


    // Relación con training center
public function trainingCenter()
{
    return $this->belongsTo('app/Models\Training_Center');
}
public function Areas ()
{
    return $this->hasMany('app/Models\Area');
}
    public function courses ()
    {
        return $this->hasMany('app/Models\Course');
    }
   

}
