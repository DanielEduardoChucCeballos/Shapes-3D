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
        Schema::create('detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('height');
            $table->string('length');
            $table->string('width');
            $table->decimal('price', 10, 2);
            $table->integer('filament_color_id')->unsigned();
            $table->foreign('filament_color_id')->references('id')->on('filament_color')->onDelete('cascade');


            $table->integer('filling_id')->unsigned();
            $table->foreign('filling_id')->references('id')->on('filling')->onDelete('cascade');

            $table->integer('finish_id')->unsigned();
            $table->foreign('finish_id')->references('id')->on('finish')->onDelete('cascade');

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
        Schema::dropIfExists('detail');
    }
};
