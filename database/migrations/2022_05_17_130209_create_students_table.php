<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('Email');
            $table->string('department');
            $table->string('facaulity');
            $table->string('classyear');
            $table->timestamps();

            $table->unsignedBigInteger('proctor-id')->foriegn('proctor-id')->references('id')->on('proctors')->onDelete('cascade');
        });
    
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
