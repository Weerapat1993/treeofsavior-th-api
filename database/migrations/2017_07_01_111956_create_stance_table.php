<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
        });

        DB::table('stance')->insert([

            [ 'name' => 'ไม่มี' ],
            [ 'name' => 'ดาบมือเดียว' ],
            [ 'name' => 'ดาบมือเดียวและโล่' ],
            [ 'name' => 'ดาบสองมือ' ],
            [ 'name' => 'โล่' ],
            [ 'name' => 'หอกมือเดียว' ],
            [ 'name' => 'หอกและโล่' ],
            [ 'name' => 'หอกสองมือ' ],
            [ 'name' => 'ธนูสองมือ' ],
            [ 'name' => 'หน้าไม้และโล่' ],
            [ 'name' => 'หน้าไม้และมีด' ],
            [ 'name' => 'ปืนและโล่' ],
            [ 'name' => 'ปืนและมีด' ],
            [ 'name' => 'คฑา' ],
            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stance');
    }
}
