<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	public function patient_tooth(){
		return $this->hasMany('App\Patient_Tooth','patient_id');
	}

    public function visits(){
        return $this->hasMany('App\Visit','patient_id');
    }
}
