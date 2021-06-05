<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            $table->string('doctors_name')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('image');
            $table->string('professional_degree');
            $table->string('designation');
            $table->string('specilalist_on');
            $table->string('hospital_name');
            $table->string('chamber_name');
            $table->time('visiting_hour');
            $table->string('chamber_location');
            $table->integer('contact_no');
            $table->string('email_address')->nullable();
            $table->integer('age');
            $table->string('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor');
    }
}
