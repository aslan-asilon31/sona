<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->string('room_slug')->nullable();
            $table->string('room_desc');
            $table->integer('room_weekend_rate')->nullable();
            $table->integer('room_weekend_ro_rate')->nullable();
            $table->integer('room_extrabed_rate')->nullable();
            $table->integer('room_future_availability');
            $table->integer('room_order');
            $table->integer('room_publish_status')->default(1);
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
        Schema::dropIfExists('rooms');
    }
}
