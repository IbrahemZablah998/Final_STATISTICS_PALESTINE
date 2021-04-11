<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDataMarriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family__data_marriages', function (Blueprint $table) {
            $table->id();
            $table->string('marriage_status');
            $table->integer('age_first_marriage');
            $table->integer('duration_marriage');

            $table->integer('number_for_life_born_a_live');
            $table->integer('number_for_life_a_live');

            $table->integer('number_for_annual_born_a_live');
            $table->integer('number_for_annual_a_live');
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
        Schema::dropIfExists('family__data_marriages');
    }
}
