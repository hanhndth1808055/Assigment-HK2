<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRegisterScholarship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_scholarship', function (Blueprint $table) {
            $table->bigIncrements('register_id');
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('note')->default('nothing');
            $table->boolean('contact')->default(0);
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
        Schema::dropIfExists('register_scholarship');
    }
}
