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
        Schema::create('proctors', function (Blueprint $table) {
            $table->id();
            $table->string('block_no');
            $table->string('dorm_no');
            $table->string('dormitary_material');
            $table->timestamps();
            $table->unsignedDBinteger(proctor-id);
            $table->forgien(proctor-id);
            $table->references('id');
            $table->on('proctor');
            $table->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proctors');
    }
};
