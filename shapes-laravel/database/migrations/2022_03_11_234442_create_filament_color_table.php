<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filament_color', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('color_id')->unsigned();
            $table->foreign('color_id')->references('id')->on('color')->onDelete('cascade');
            $table->integer('filament_id')->unsigned();
            $table->foreign('filament_id')->references('id')->on('filament')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filament_color');
    }
};
