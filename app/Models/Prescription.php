<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $table="prescription";
    protected $guarded = [];

    public function appointmentDoctor(){

        return $this->belongsTo(User::class, 'doctor_id', 'id'); //relation
    }

    public function paitent()
    {
        return $this->belongsTo(User::class,'patient_id','id');
    }

}
