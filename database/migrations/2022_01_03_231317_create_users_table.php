<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('StudentID')->nullable();
            $table->string('School')->nullable()->default('Admin_NoSchool');
            $table->string('Major')->nullable()->default('Admin_NoMajor');
            $table->string('Category')->nullable();
            $table->string('Gender')->nullable();
            $table->date('BirthDate')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('Country')->nullable();
            $table->string('City')->nullable();
            $table->string('Picture')->default('no_image_98890912.jpg');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//given
            $table->string('password')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
