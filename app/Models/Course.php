<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   public function Area ()
   {
       return $this->belongsTo('app\Models\Area');
   }
   public function Training_Center ()
   {
       return $this->belongsTo('app\Models\Training_Center');
   }
    public function Teacher ()
    {
         return $this->belongsTo('app\Models\Teacher');
    }
    
}
