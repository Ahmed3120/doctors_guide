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
        Schema::create('resservations', function (Blueprint $table) {

            $table->id(); 
            $table->integer('user_id')->default(null)->nullable(true);
            $table->string('pationt_name', 255);
            $table->string('p_number', 30); //pationt number
            $table->string('p_email', 255)->nullable(true);//pationt email
            $table->boolean('request_case')->nullable(true);// case requset approve or not
            $table->dateTime('reservation_time');
            $table->string('p_case', 500)->nullable(true);// pationt case descriped with less then 500 letter
            $table->string('treatment', 1000)->nullable(true);// the description from the doctor
            $table->string('checkups', 1000)->nullable(true);// the description from the doctor
            $table->dateTime('next_reservation_time')->nullable(true);
            
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
        Schema::dropIfExists('resservations');
    }
};
