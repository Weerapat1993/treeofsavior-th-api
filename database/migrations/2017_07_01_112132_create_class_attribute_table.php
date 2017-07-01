<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_attribute', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->text('description')->nullable();
            $table->integer('max_lv')->unsigned();
            $table->string('type',255)->nullable();
            $table->text('effect')->nullable();
            $table->text('class_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_attribute');
    }
}
