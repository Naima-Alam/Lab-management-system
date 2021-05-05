<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class Timeslot extends Model
{
    use HasFactory;

    protected $table="timeslots";

    protected $guarded = [];

    protected $casts = [

            'form_time'=>'datetime',
            'to_time'=>'datetime'

    ];

}
