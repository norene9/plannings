<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeanceCours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seanceCours',function($table){
            $table->increments('s_id');
            $table->string('module');
            $table->string('time');
            $table->string('teacher');
            $table->string('salle');
            $table->unsignedinteger('planning_ref_sid');
            $table->unsignedinteger('day_ref_scid');
            $table->string('group');
            $table->foreign('planning_ref_sid')->references('p_id')->on('planning');
            $table->foreign('day_ref_scid')->references('d_id')->on('days');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seanceCours');
    }
}
