<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Planning extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planning',function( $table){
            $table->increments('p_id');
            $table->unsignedinteger('promo_ref_pid');
            $table->foreign('promo_ref_pid')->references('id')->on('promotion');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planning');
    }
}
