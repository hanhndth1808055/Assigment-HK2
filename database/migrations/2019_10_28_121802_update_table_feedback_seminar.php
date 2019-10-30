<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableFeedbackSeminar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedback_seminar', function (Blueprint $table) {
            $table->foreign('seminar_id')->references('seminar_id')->on('seminar');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feedback_seminar', function (Blueprint $table) {
            $table->dropForeign(["seminar_id"]);
        });
    }
}
