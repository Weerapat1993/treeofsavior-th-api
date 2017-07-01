<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
        });

        DB::table('class_type')->insert([

            [ 'name' => 'Swordsman' ],
            [ 'name' => 'Wizard' ],
            [ 'name' => 'Archer' ],
            [ 'name' => 'Cleric' ],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_type');
    }
}
