<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFeedbackPartnership extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_partnership', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('partnership_id');
            $table->string("name");
            $table->string("email");
            $table->longText("partnership_review");
            $table->unsignedTinyInteger('active')->default(1);
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
        Schema::dropIfExists('feedback_partnership');
    }
}
