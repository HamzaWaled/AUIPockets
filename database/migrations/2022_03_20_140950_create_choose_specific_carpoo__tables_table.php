<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChooseSpecificCarpooTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choose_specific_carpoo__tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('User_Who_HasChosen_This_Carpoo');
            $table->integer('CarpooId');
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
        Schema::dropIfExists('choose_specific_carpoo__tables');
    }
}
