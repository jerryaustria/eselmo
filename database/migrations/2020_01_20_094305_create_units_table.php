<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('user_id')->nullable();
            $table->bigIncrements('country_id')->nullable();
            $table->string('Title');
            $table->string('Description');
            $table->integer('Cities');
            $table->string('Address');
            $table->bigIncrements('property_type')->nullable();
            $table->bigIncrements('status')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();
            $table->double('area')->nullable();
            $table->double('garages')->nullable();

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
        Schema::dropIfExists('units');
    }
}
