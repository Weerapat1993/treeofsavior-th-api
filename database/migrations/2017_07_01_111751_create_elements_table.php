<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
        });

        DB::table('elements')->insert([

            [ 'name' => 'Normal' ],
            [ 'name' => 'Fire' ],
            [ 'name' => 'Ice' ],
            [ 'name' => 'Lighting' ],
            [ 'name' => 'Poison' ],
            [ 'name' => 'Earth' ],
            [ 'name' => 'Holy' ],
            [ 'name' => 'Dark' ],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elements');
    }
}
