<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousingDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housing_datas', function (Blueprint $table) {
            $table->id();
            $table->integer('Building_counter_number');
            $table->string('Building_condition');
            $table->integer('Residential_unit_number');
            
            $table->string('condition_ofThe_housingUnit');
            $table->integer('Family_number_in_the_building')->unique();
            $table->integer('Family_number_in_the_counting_area');
            $table->string('Adjective_works');
            $table->string('Dwelling_type');
            $table->string('Possession_ofThe_dwelling');
            $table->integer('Dwelling_space');
            $table->integer('numberOfRooms');
            $table->integer('numberOfSleepRooms');
            $table->string('main_ofDrink_water');
            $table->string('main_ofElectricity');
            $table->string('type_of_toilet');
            $table->string('waste_Disposal');
            $table->string('main_of_energy_for_cook');
            $table->string('main_of_energy_for_heat');
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
        Schema::dropIfExists('housing_datas');
    }
}
