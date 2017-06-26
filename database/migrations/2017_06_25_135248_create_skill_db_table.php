<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillDbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_db', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->integer('max_level')->unsigned();
            $table->integer('circle')->unsigned();
            $table->text('description')->nullable();
            $table->string('url',255)->nullable();
            $table->integer('class_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_db');
    }
}
