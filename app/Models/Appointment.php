<?php

namespace App\Models;

use App\Models\Timeslot;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function appointmentSlot(){

        return $this->belongsTo(Timeslot::class, 'slot_id', 'id'); //relation
    }

    public function tests()
    {
        return $this->belongsToMany(TestInformation::class,'appointment_test','appointment_id','test_id');
    }
    public function paymentstatus()
    {

        return $this->hasOne(Payment::class, 'appointment_id', 'id'); //
    }

    public function patient()
    {
        return $this->belongsTo(User::class);
    }

}
