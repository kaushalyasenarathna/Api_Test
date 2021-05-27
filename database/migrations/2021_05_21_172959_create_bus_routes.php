<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusRoutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_routes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('bus_id');

            $table->unsignedBigInteger('route_id');
            $table->string('status')->nullable();
            $table->timestamps();
            $table->foreign('route_id')->references('id')->on('bus_routes');
            $table->foreign('bus_id')->references('id')->on('bus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_routes');
    }
}
