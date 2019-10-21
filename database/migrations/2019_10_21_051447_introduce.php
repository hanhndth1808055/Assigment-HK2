<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Introduce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('introduce', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->text('content');
            $table->string("image");
            $table->boolean("show")->default(0);
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
        Schema::dropIfExists('introduce');
    }
}
