<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableScholarship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('country_id')->references('country_id')->on('country')->onDelete('cascade');
            $table->foreign('unit_id')->references('unit_id')->on('unit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scholarship', function (Blueprint $table) {
            $table->dropForeign('scholarship_country_id_foreign');
            $table->dropForeign('scholarship_unit_id_foreign');
        });
    }
}
