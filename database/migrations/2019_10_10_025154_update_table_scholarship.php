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
            $table->foreign('country_id')->references('country_id')->on('country');
            $table->foreign('unit_id')->references('unit_id')->on('unit');
        });
        // Schema::table('scholarship_detai',function(Blueprint $table){
        //     $table->foreign('id')->references('id')->on('scholarship');
        // });
        Schema::table('scholarship_coment',function(Blueprint $table){
            $table->foreign('id')->references('id')->on('scholarship');
        });
        Schema::table('register_scholarship',function(Blueprint $table){
            $table->foreign('id')->references('id')->on('scholarship');
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
            //
        });
    }
}
