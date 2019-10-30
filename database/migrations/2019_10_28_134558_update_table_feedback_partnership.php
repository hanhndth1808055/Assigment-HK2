<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableFeedbackPartnership extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedback_partnership', function (Blueprint $table) {
            $table->foreign('partnership_id')->references('partnership_id')->on('partnership');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feedback_partnership', function (Blueprint $table) {
            $table->dropForeign(["partnership_id"]);

        });
    }
}
