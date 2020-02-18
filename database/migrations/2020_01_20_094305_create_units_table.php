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
            $table->integer('user_id')->unsigned()->index();
            $table->integer('country_id')->unsigned()->index()->nullable();
            $table->string('Title');
            $table->string('Description');
            $table->integer('Cities');
            $table->string('Address');
            $table->integer('property_type')->nullable();
            $table->integer('status')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();
            $table->double('area')->nullable();
            $table->double('garages')->nullable();
            $table->tinyInteger('israting')->default('1');
            $table->double('map_lat')->nullable();
            $table->double('map_lon')->nullable();
            $table->double('price');
            $table->string('property_features')->nullable();
            $table->string('photos')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
