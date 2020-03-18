<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_property_', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('property_id')->unsigned()->nullable();
            $table->foreign('property_id')->references('id')
                  ->on('properties')->onDelete('cascade');

            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id')->references('id')
                  ->on('statuses')->onDelete('cascade');

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
        Schema::dropIfExists('property_status');
    }
}
