<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('permanent_address')->nullable();
            $table->string('current_address');
            $table->string('country');
            $table->string('state');
            $table->string('avatar');
            $table->string('city');
            $table->integer('pincode');
            $table->string('mobile');
            $table->string('alternate_mobile')->nullable();
            $table->string('secondary_email')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('profiles');
    }
}
