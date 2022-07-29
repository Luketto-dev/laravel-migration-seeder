<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("agency",50);
            $table->dateTime("departure_time");
            $table->string("departure_station", 100);
            $table->dateTime("arrival_time");
            $table->string("arrival_station", 100);
            $table->smallInteger("train_code")->unsigned();;
            $table->tinyInteger("number_carriages")->unsigned();
            $table->boolean("in_time")->default(1);
            $table->boolean("deleted")->default(0);
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
        Schema::dropIfExists('trains');
    }
}
