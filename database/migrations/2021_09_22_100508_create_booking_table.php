<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id('booking_id');
            $table->string('unique_booking_id',11);
              $table->string('user_id',11);
              $table->string('booking_name',50);
              $table->string('booking_email',55);
              $table->string('booking_phone',50);
              $table->string('id_proof',55);
              $table->string('city',30);
              $table->string('total_number',11);
              $table->string('children_number',11);
             
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
        Schema::dropIfExists('booking');
    }
}
