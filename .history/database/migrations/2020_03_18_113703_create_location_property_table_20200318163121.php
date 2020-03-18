<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_property', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('property_id')->unsigned()->nullable();
            $table->foreign('property_id')->references('id')
                  ->on('properties')->onDelete('cascade');

            $table->integer('location_id')->unsigned()->nullable();
            $table->foreign('location_id')->references('id')
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
        Schema::dropIfExists('location_property');
    }
}
