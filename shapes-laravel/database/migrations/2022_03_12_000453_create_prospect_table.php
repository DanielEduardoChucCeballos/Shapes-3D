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
        Schema::create('prospect', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detail_id')->unsigned();
            $table->foreign('detail_id')->references('id')->on('detail')->onDelete('cascade');

            $table->integer('personal_information_id')->unsigned();
            $table->foreign('personal_information_id')->references('id')->on('personal_information')->onDelete('cascade');

            $table->integer('description_model_id')->unsigned();
            $table->foreign('description_model_id')->references('id')->on('description_model')->onDelete('cascade');

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
        Schema::dropIfExists('prospect');
    }
};
