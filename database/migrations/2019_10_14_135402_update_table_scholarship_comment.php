<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableScholarshipComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scholarship_coment', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('scholarship')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scholarship_coment', function (Blueprint $table) {
            $table->dropForeign('scholarship_coment_id_foreign');
        });
    }
}
