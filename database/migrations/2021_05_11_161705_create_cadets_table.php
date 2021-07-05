<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadets', function (Blueprint $table) {
            $table->id();
            $table->string('cadetID');
            $table->string('cadetRank');
            $table->string('cadetGender');
            $table->string('phoneNum');
            $table->string('cadetAddress');
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
        Schema::dropIfExists('cadets');
    }
}
