<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('prefix');
            $table->string('fname',64);
            $table->string('lname',64);
            $table->string('ipass', 32);
            $table->tinyInteger('type');
            $table->tinyInteger('position');
            $table->tinyInteger('level');
            $table->tinyInteger('rank');
            $table->tinyInteger('statustype');
            $table->tinyInteger('belong');
            $table->tinyInteger('office');
            $table->string('phone',32);
            $table->string('local_phone',16);
            $table->tinyInteger('ustatus');
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
        Schema::dropIfExists('persons');
    }
}
