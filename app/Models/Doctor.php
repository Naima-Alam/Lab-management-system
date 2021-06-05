<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table="doctor";

    protected $guarded = [];
    public function doctoruser(){

        return $this->belongsO(User::class, 'user_id', 'id'); //relation
    }



}
