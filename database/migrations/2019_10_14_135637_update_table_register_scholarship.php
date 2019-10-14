<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableRegisterScholarship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register_scholarship', function (Blueprint $table) {
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
        Schema::table('register_scholarship', function (Blueprint $table) {
            $table->dropForeign('register_scholarship_id_foreign');
        });
    }
}
