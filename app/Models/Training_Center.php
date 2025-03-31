<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training_Center extends Model
{
    //
    public function Course ()
    {
        return $this->hasMany('App\Models\Course');
    }
    public function Teacher ()
    {
        return $this->hasMany('App\Models\Teacher');
    }
}
