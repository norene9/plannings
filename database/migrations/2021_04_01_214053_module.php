<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Module extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module', function ($table) {
            $table->increments('m_id');
            $table->string('module');
            $table->unsignedinteger('promo_ref_mid');
            $table->foreign('promo_ref_mid')->references('id')->on('promotion');
            $table->unsignedinteger('teacher_ref_mid');
            $table->foreign('teacher_ref_mid')->references('t_id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module');

    }
}
