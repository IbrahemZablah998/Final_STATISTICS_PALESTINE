<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_technologies', function (Blueprint $table) {
            $table->id();
            $table->integer('Palestine_internet_line');
            $table->integer('Israel_internet_line');
            $table->integer('Palestine_Cellular');
            $table->integer('Israel_Cellular');
            $table->integer('computer');
            $table->integer('Laptop');
            $table->integer('IPAD');
            $table->integer('Artificial_mobile');
            $table->integer('invedual_uses');
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
        Schema::dropIfExists('information_technologies');
    }
}
