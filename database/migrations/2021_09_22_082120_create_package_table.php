<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->id('package_id');
             $table->string('package_name');
              $table->integer('destination');
               $table->integer('tour_category');
                $table->integer('price_for_adult');
                 $table->integer('price_for_children');
                  $table->text('package_description');
                   $table->text('includes');
                    $table->text('excludes');
                     $table->string('date_of_journey');
                      $table->string('number_of_people');
                       $table->string('number_of_days');
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
        Schema::dropIfExists('package');
    }
}
