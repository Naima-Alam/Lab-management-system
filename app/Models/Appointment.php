<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="appointment";

    protected $guarded = [];

    public function appointmentDoctor(){

        return $this->belongsTo(Doctor::class, 'doctors_id', 'id'); //relation
    }

    public function appointmentTest(){

        return $this->belongsTo(TestInformation::class, 'test_id', 'id'); //relation
    }
}
