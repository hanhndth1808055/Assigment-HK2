<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLearnMoreResearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learn_more_research', function (Blueprint $table) {
            $table->bigIncrements('learn_more_id');
            $table->string('project_director');
            $table->string('learn_more_project_link');
            $table->string('duration');
            $table->string('funded_by');
            $table->string('partners');
            $table->string('bodies_of_work');
            $table->string('services');
            $table->string('regions');
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
        Schema::dropIfExists('learn_more_research');
    }
}
