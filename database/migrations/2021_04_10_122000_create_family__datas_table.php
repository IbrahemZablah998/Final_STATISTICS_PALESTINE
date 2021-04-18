<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family__datas', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('relationShip');
            $table->string('gender');
            $table->integer('age');
            $table->string('nationality');
            $table->string('placeOfMotherTimeInvidualBirth');
            $table->string('place');
            $table->float('periodAt_theCurrent_residenceIn_fullTime', 3, 1);
            
            $table->string('previous_place');
            // $table->integer('Family_number_in_the_building');
            $table->string('reason_change_residence');
            $table->string('religion');
            $table->string('asylum_status');
            $table->string('healthy_condition_difficulties');
            $table->string('health_insurance');
            $table->string('disease');
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
        Schema::dropIfExists('family__datas');
    }
}
