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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id')->nullable(true);
            $table->string('doctor_name', 255);
            $table->string('doctor_address1', 255);
            $table->string('doctor_address2', 500);
            $table->string('specialize', 255);
            $table->string('doctor_phone_number', 30)->nullable();
            $table->string('note', 500);

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
        Schema::dropIfExists('doctors');
    }
};
