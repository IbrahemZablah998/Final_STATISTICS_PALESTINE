<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataCollectionDates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DataCollectionDates', function (Blueprint $table) {
            $table->id();
            $table->string("city")->unique();
            $table->timestamp('created_at')->useCurrent();;
            $table->timestamp('ended_at')->useCurrent();;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DataCollectionDates');
    }
}
