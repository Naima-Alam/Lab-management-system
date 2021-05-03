<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestInformation extends Model
{
    use HasFactory;

    protected $table="testinformation";

    protected $guarded = [];
}
