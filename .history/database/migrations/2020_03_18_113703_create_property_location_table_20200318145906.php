<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_location', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('properties_id')->unsigned()->nullable();
            $table->foreign('properties_id')->references('id')
                  ->on('properties')->onDelete('cascade');

            $table->integer('locations_id')->unsigned()->nullable();
            $table->foreign('locations_id')->references('id')
                  ->on('locations')->onDelete('cascade');

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
        Schema::dropIfExists('property_location');
    }
}
