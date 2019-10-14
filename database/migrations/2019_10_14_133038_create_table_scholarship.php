<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableScholarship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('image');
            $table->text('brief_content');
            $table->text('content');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('unit_id');
            $table->integer('pay');
            $table->date('startdate');
            $table->date('enddate');
            // $table->string('field_study');
            // $table->integer('number_awards');
            // $table->string('target_group');
            // $table->text('duration');
            // $table->text('eligibility');
            // $table->text('instructions');
            // $table->text('link');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('scholarship');
    }
}
