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
            $table->string('learn_more_research_name');
            $table->string('duration');
            $table->longText('funded_by');
            $table->longText('partners');
            $table->longText('bodies_of_work');
            $table->longText('services');
            $table->longText('regions');
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
