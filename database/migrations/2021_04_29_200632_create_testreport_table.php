<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestreportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testreport', function (Blueprint $table) {
            $table->id();
            $table->integer('Patient_id');
            $table->string('doctors_name');
            $table->string('test_name');
            $table->text('image');
            $table->string('gender');
            $table->string('prepared_by');
            $table->string('description');

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
        Schema::dropIfExists('testreport');
    }
}
