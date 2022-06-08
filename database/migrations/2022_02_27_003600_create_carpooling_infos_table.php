<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarpoolingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carpooling_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('User_Who_Added_This_Carpoo_id');
            $table->string('CityFrom')->nullable();
            $table->string('CityTo')->nullable();
            $table->string('MeetingPoint')->nullable();
            $table->date('CarpooDate')->nullable();
            $table->string('CarType')->nullable();
            $table->string('CIN')->nullable();
            $table->integer('Price')->nullable();
            $table->integer('Passengers')->nullable();
            $table->time("StartingTime");
            $table->time("ArrivingTime");
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
        Schema::dropIfExists('carpooling_infos');
    }
}
