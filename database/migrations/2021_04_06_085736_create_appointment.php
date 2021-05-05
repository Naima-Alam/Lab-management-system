<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->integer('doctors_id');

            $table->integer('patient_id');
            // $table->integer('appointment_id')->unique();;
            $table->integer('test_id');
            $table->integer('slot_id');
            $table->date('appointment_date');
            $table->string('reason_name')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('pending');
            $table->string('test_status')->default('pending');
            $table->string('cancle_reason')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('appointment');
    }
}
