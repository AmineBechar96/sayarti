<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyLikedServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_liked_services', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('agency_id');
            $table->string('agency_type',999);
            $table->boolean('liked');
            $table->string('token',999);
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
        Schema::dropIfExists('my_liked_services');
    }
}
