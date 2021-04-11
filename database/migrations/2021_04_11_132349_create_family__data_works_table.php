<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDataWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family__data_works', function (Blueprint $table) {
            $table->id();
            $table->string('realationship_of_work');
            $table->string('overtime_work');
            $table->string('major_occupation');
            $table->string('major_economic_activity');
            $table->string('sector');
            $table->string('workplace');
            $table->string('main_practical_case');
            $table->string('work_contract');
            $table->string('vacations');
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
        Schema::dropIfExists('family__data_works');
    }
}
