<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousingDataDeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housing_data_deads', function (Blueprint $table) {
            // $table->id();
            $table->integer('house_id');
            $table->string('Full_name_dead');
            $table->primary(['house_id', 'Full_name_dead']);
            $table->string('gender');
            $table->string('relationship');
            $table->integer('age');
            $table->string('Death_certificate');
            $table->string('marriage_status');
            $table->string('pregnant_at_time_of_death');
            $table->string('death_during_childbirth');
            $table->string('death_during_the_42_days_of_birth');
            $table->string('Death_due_accident');
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
        Schema::dropIfExists('housing_data_deads');
    }
}
