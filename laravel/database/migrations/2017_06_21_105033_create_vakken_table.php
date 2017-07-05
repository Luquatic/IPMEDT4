<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVakkenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vakken', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jaar');
            $table->integer('periode');
            $table->string('naam')->unique();
            $table->integer('ec');
            $table->boolean('gehaald');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vakken');
    }
}
