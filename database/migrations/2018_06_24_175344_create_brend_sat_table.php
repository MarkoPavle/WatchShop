<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrendSatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 /*   public function up()
    {
        Schema::create('brend_sat', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('sat_id')->unsigned()->nullable();
            $table->foreign('sat_id')->references('id')
                ->on('sat')->ondelete('cascade');

            $table->integer('brend_id')->unsigned()->nullable();
            $table->foreign('brend_id')->references('id')
                ->on('brend')->ondelete('cascade');

            $table->timestamps();
        });
    }*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brend_sat');
    }
}
