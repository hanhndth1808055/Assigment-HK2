<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSholarship extends Migration
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
            $table->text("brief_content");
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

        // Schema::create('scholarship_detai', function (Blueprint $table) {
        //     $table->bigIncrements('detai_id');
        //     $table->unsignedBigInteger('id');
        //     $table->text('content');
        //     $table->string('field_study');
        //     $table->integer('number_awards');
        //     $table->string('target_group');
        //     $table->text('duration');
        //     $table->text('eligibility');
        //     $table->text('instructions');
        //     $table->text('link');
        // });

        Schema::create('scholarship_coment',function(Blueprint $table){
            $table->bigIncrements('coment_id');
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->string('email');
            $table->text('messager');
            $table->boolean('active');
            $table->timestamps();
        });

        Schema::create('register_scholarship',function(Blueprint $table){
            $table->bigIncrements('register_id');
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('note')->default('nothing');
            $table->boolean('contact')->default(0);
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
        Schema::dropIfExists('scholarship_coment');
        Schema::dropIfExists('register_scholarship');
    }
}
