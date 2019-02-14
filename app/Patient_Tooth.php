<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_Tooth extends Model
{
    public $timestamps = false;

    public function teeth(){
        return $this->belongsTo('App\Tooth','tooth_id');
    }
}
