<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_plans', function (Blueprint $table) {
            $table->id();
            $table->string('cancellation_id')->nullable();
            $table->string('rate_name')->nullable();
            $table->tinyInteger('def_meal_available')->nullable();
            $table->integer('def_bookable')->nullable();
            $table->integer('def_minimum_stay')->nullable();
            $table->integer('base_rate')->nullable();
            $table->integer('extrabed_rate')->nullable();
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
        Schema::dropIfExists('rate_plans');
    }
}
