<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePartnership extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnership', function (Blueprint $table) {
            $table->bigIncrements('partnership_id');
            $table->string("partnership_edu_logo");
            $table->string("partnership_edu_name");
            $table->longText("partnership_edu_infor");
            $table->longText("partnership_edu_infor_readmore");
            $table->string("partnership_edu_address");
            $table->string("partnership_edu_tuition");
            $table->string("partnership_edu_average_tuition");
            $table->string("partnership_edu_percentage");
            $table->string("partnership_edu_value");
            $table->string("partnership_edu_website");
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
        Schema::dropIfExists('partnership');
    }
}
