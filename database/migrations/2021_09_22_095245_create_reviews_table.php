<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('reviews_id');
            $table->Integer('package_id');
             $table->string('reviews_name',50);
              $table->string('reviews_email',55);
               $table->string('reviews_title',100);
               $table->tinyInteger('reviews_rate');
               $table->tinyInteger('reviews_active');
               $table->text('reviews_comment');
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
        Schema::dropIfExists('reviews');
    }
}
