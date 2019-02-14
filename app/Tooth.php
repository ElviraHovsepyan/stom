<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tooth extends Model
{
    public $timestamps = false;

    public function patients_teeth(){
        return $this->hasMany('App\Patient_Tooth', 'tooth_id');
    }

}
