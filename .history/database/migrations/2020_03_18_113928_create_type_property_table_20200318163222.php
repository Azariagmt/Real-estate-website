<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_property', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('property_id')->unsigned()->nullable();
            $table->foreign('property_id')->references('id')
                  ->on('properties')->onDelete('cascade');

            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')
                  ->on('types')->onDelete('cascade');

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
        Schema::dropIfExists('type_property');
    }
}
