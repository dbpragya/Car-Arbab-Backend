<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carbrakesystems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id')->nullable();
            $table->string('front_left_manufac')->nullable();
            $table->date('front_left_date')->nullable();
            $table->integer('front_left_size')->nullable();
            $table->text('front_left_condition')->nullable();

            $table->string('front_right_manufac')->nullable();
            $table->date('front_right_date')->nullable();
            $table->integer('front_right_size')->nullable();
            $table->text('front_right_condition')->nullable();

            $table->string('rear_left_manufac')->nullable();
            $table->date('rear_left_date')->nullable();
            $table->integer('rear_left_size')->nullable();
            $table->text('rear_left_condition')->nullable();

            $table->string('rear_right_manufac')->nullable();
            $table->date('rear_right_date')->nullable();
            $table->integer('rear_right_size')->nullable();
            $table->text('rear_right_condition')->nullable();

            $table->string('spare_manufac')->nullable();
            $table->date('spare_date')->nullable();
            $table->integer('spare_size')->nullable();
            $table->text('spare_condition')->nullable();

            $table->string('front_left_brand')->nullable();
            $table->text('front_left_rim_condition')->nullable();

            $table->string('front_right_brand')->nullable();
            $table->text('front_right_rim_condition')->nullable();

            $table->string('rear_left_brand')->nullable();
            $table->text('rear_left_rim_condition')->nullable();

            $table->string('rear_right_brand')->nullable();
            $table->text('rear_right_rim_condition')->nullable();
            
            $table->string('spare_brand')->nullable();
            $table->text('spare_rim_condition')->nullable();
                      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carbrakesystems');
    }
};
