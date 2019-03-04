<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    public function patients(){
        return $this->belongsTo('App\Patient','patient_id');
    }
}
