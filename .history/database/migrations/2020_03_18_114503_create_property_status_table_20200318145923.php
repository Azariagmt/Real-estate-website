<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_status', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('properties_id')->unsigned()->nullable();
            $table->foreign('property_id')->references('id')
                  ->on('properties')->onDelete('cascade');

            $table->integer('statuses_id')->unsigned()->nullable();
            $table->foreign('statuses_id')->references('id')
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
