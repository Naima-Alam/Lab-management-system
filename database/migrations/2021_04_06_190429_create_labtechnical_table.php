<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabtechnicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labtechnical', function (Blueprint $table) {
            $table->id();
            $table->string('labtechnical_name');
            $table->text('image')->nullable();
            $table->string('labtechnical_id');
            $table->string('gender');
            $table->string('email');
            $table->string('contact_no');
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
        Schema::dropIfExists('labtechnical');
    }
}




