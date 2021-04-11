<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDataLearningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family__data_learnings', function (Blueprint $table) {
            $table->id();
            $table->string('enroll_education');
            $table->integer('number_of_years_schooling');
            $table->string('educational_major');
            $table->string('highest_academic_qualification');
            $table->string('technical_vocational_qualification');
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
        Schema::dropIfExists('family__data_learnings');
    }
}
