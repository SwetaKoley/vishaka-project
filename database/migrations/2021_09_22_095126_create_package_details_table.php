<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         
        Schema::create('package_details', function (Blueprint $table) {
            $table->id('package_details_id');
             $table->string('package_id',11);
              $table->string('day_number',11);
               $table->text('includes',50);
                $table->string('heading',50);
                 $table->text('content',150);
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
        Schema::dropIfExists('package_details');
    }
}
