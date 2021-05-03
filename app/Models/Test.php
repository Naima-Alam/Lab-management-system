<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table="test";
    protected $guarded = [];
    public function testDoctor(){

        return $this->belongsTo(Doctor::class, 'doctors_id', 'id');
    }
}
