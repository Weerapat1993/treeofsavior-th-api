<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute', function (Blueprint $table) {
            $table->increments('id');
            $table->string('att_name',255);
            $table->text('att_description')->nullable();
            $table->integer('att_max_lv')->unsigned();
            $table->text('att_effect')->nullable();
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('class_db');
            $table->integer('skill_id')->unsigned();
            $table->foreign('skill_id')->references('id')->on('skill_db');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute');
    }
}
