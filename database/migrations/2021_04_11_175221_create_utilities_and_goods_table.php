<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilitiesAndGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilities_and_goods', function (Blueprint $table) {
            $table->id();
            $table->integer('kitchen');
            $table->integer('bathrooms');
            $table->integer('toilets');
            $table->integer('bathroom_toilets');
            $table->integer('privateCar');
            $table->integer('cooker');
            $table->integer('fridge');
            $table->integer('fraser');
            $table->integer('vacuum_cleaner');
            $table->integer('microwave');
            $table->integer('washing_Machine');
            $table->integer('blotter');
            $table->integer('dishwasher');
            $table->integer('filter');
            $table->integer('LCD_LED');
            $table->integer('TV');
            $table->integer('pichup_dish');
            $table->integer('electric_fan');
            $table->integer('conditioner');
            $table->integer('central_adaptation');
            $table->integer('central_heating');
            $table->integer('solar_heater');
            $table->integer('landline_telephone');
            $table->integer('home_library');
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
        Schema::dropIfExists('utilities_and_goods');
    }
}
