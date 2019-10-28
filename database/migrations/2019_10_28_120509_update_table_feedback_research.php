<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableFeedbackResearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedback_research', function (Blueprint $table) {
            $table->foreign('research_project_id')->references('research_project_id')->on('research');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feedback_research', function (Blueprint $table) {
            $table->dropForeign(["research_project_id"]);
        });
    }
}
