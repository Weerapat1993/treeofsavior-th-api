<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassDbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_db', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->nullable();
            $table->text('description')->nullable();
            $table->text('skill')->nullable();
            $table->text('attribute')->nullable();
            $table->integer('rank');
            $table->string('img_url',100)->nullable();
            $table->integer('class_type')->unsigned();
            $table->foreign('class_type')->references('id')->on('class_type');
        });

        DB::table('class_db')->insert([

            [ 'name' => 'Swordsman', 'description' => 'Swordsman', 'rank' => '1', 'class_type' => '1', 'img_url' => 'swordsman_m01' ],
            [ 'name' => 'Wizard', 'description' => 'Wizard', 'rank' => '1', 'class_type' => '2', 'img_url' => 'wizard_f01' ],
            [ 'name' => 'Archer', 'description' => 'Archer', 'rank' => '1', 'class_type' => '3', 'img_url' => 'archer_f01' ],
            [ 'name' => 'Cleric', 'description' => 'Cleric', 'rank' => '1', 'class_type' => '4', 'img_url' => 'cleric_f01' ],
            [ 'name' => 'Highlander', 'description' => 'Highlander', 'rank' => '2', 'class_type' => '1', 'img_url' => 'swordsman_m02' ],
            [ 'name' => 'Peltasta', 'description' => 'Peltasta', 'rank' => '2', 'class_type' => '1', 'img_url' => 'swordsman_f03' ],
            [ 'name' => 'Pyromancer', 'description' => 'Pyromancer', 'rank' => '2', 'class_type' => '2', 'img_url' => 'wizard_f02' ],
            [ 'name' => 'Cryomancer', 'description' => 'Cryomancer', 'rank' => '2', 'class_type' => '2', 'img_url' => 'wizard_f03' ],
            [ 'name' => 'Quarrel Shooter', 'description' => 'Quarrel Shooter', 'rank' => '2', 'class_type' => '3', 'img_url' => 'archer_f03' ],
            [ 'name' => 'Ranger', 'description' => 'Ranger', 'rank' => '2', 'class_type' => '3', 'img_url' => 'archer_m02' ],
            [ 'name' => 'Priest', 'description' => 'Priest', 'rank' => '2', 'class_type' => '4', 'img_url' => 'cleric_m02' ],
            [ 'name' => 'Krivis', 'description' => 'Krivis', 'rank' => '2', 'class_type' => '4', 'img_url' => 'cleric_m03' ],
            [ 'name' => 'Hoplite', 'description' => 'Hoplite', 'rank' => '3', 'class_type' => '1', 'img_url' => 'swordsman_f04' ],
            [ 'name' => 'Barbarian', 'description' => 'Barbarian', 'rank' => '3', 'class_type' => '1', 'img_url' => 'swordsman_m05' ],
            [ 'name' => 'Psychokino', 'description' => 'Psychokino', 'rank' => '3', 'class_type' => '2', 'img_url' => 'wizard_f04' ],
            [ 'name' => 'Linker', 'description' => 'Linker', 'rank' => '3', 'class_type' => '2', 'img_url' => 'wizard_m05' ],
            [ 'name' => 'Hunter', 'description' => 'Hunter', 'rank' => '3', 'class_type' => '3', 'img_url' => 'archer_f05' ],
            [ 'name' => 'Sapper', 'description' => 'Sapper', 'rank' => '3', 'class_type' => '3', 'img_url' => 'archer_m04' ],
            [ 'name' => 'Bokor', 'description' => 'Bokor', 'rank' => '3', 'class_type' => '4', 'img_url' => 'cleric_m04' ],
            [ 'name' => 'Dievdirby', 'description' => 'Dievdirby', 'rank' => '3', 'class_type' => '4', 'img_url' => 'cleric_f05' ],
            [ 'name' => 'Cataphract', 'description' => 'Cataphract', 'rank' => '4', 'class_type' => '1', 'img_url' => 'swordsman_f06' ],
            [ 'name' => 'Rodelero', 'description' => 'Rodelero', 'rank' => '4', 'class_type' => '1', 'img_url' => 'swordsman_m07' ],
            [ 'name' => 'Thaumaturge', 'description' => 'Thaumaturge', 'rank' => '4', 'class_type' => '2', 'img_url' => 'wizard_f06' ],
            [ 'name' => 'Elementalist', 'description' => 'Elementalist', 'rank' => '4', 'class_type' => '2', 'img_url' => 'wizard_f07' ],
            [ 'name' => 'Wugushi', 'description' => 'Wugushi', 'rank' => '4', 'class_type' => '3', 'img_url' => 'archer_f06' ],
            [ 'name' => 'Scout', 'description' => 'Scount', 'rank' => '4', 'class_type' => '3', 'img_url' => 'archer_m07' ],
            [ 'name' => 'Sadhu', 'description' => 'Sadhu', 'rank' => '4', 'class_type' => '4', 'img_url' => 'cleric_f06' ],
            [ 'name' => 'Paladin', 'description' => 'Paladin', 'rank' => '4', 'class_type' => '4', 'img_url' => 'cleric_m07' ],
            [ 'name' => 'Squire', 'description' => 'Squire', 'rank' => '5', 'class_type' => '1', 'img_url' => 'swordsman_m08' ],
            [ 'name' => 'Corsair', 'description' => 'Corsair', 'rank' => '5', 'class_type' => '1', 'img_url' => 'swordsman_f09' ],
            [ 'name' => 'Sorcerer', 'description' => 'Sorcerer', 'rank' => '5', 'class_type' => '2', 'img_url' => 'wizard_f08' ],
            [ 'name' => 'Chronomancer', 'description' => 'Chronomancer', 'rank' => '5', 'class_type' => '2', 'img_url' => 'wizard_f09' ],
            [ 'name' => 'Rogue', 'description' => 'Rogue', 'rank' => '5', 'class_type' => '3', 'img_url' => 'archer_f08' ],
            [ 'name' => 'Fletcher', 'description' => 'Fletcher', 'rank' => '5', 'class_type' => '3', 'img_url' => 'archer_m09' ],
            [ 'name' => 'Monk', 'description' => 'Monk', 'rank' => '5', 'class_type' => '4', 'img_url' => 'cleric_f08' ],
            [ 'name' => 'Pardoner', 'description' => 'Pardoner', 'rank' => '5', 'class_type' => '4', 'img_url' => 'cleric_f09' ],
            [ 'name' => 'Centurion', 'description' => 'Centurion', 'rank' => '6', 'class_type' => '1', 'img_url' => 'swordsman_f10' ],
            [ 'name' => 'Doppelsoeldner', 'description' => 'Doppelsoeldner', 'rank' => '6', 'class_type' => '1', 'img_url' => 'swordsman_f11' ],
            [ 'name' => 'Necromancer', 'description' => 'Necromancer', 'rank' => '6', 'class_type' => '2', 'img_url' => 'wizard_m10' ],
            [ 'name' => 'Alchemist', 'description' => 'Alchemist', 'rank' => '6', 'class_type' => '2', 'img_url' => 'wizard_m11' ],
            [ 'name' => 'Falconer', 'description' => 'Falconer', 'rank' => '6', 'class_type' => '3', 'img_url' => 'archer_m10' ],
            [ 'name' => 'Schwarzer Reiter', 'description' => 'Schwarzer Reiter', 'rank' => '6', 'class_type' => '3', 'img_url' => 'archer_f11' ],
            [ 'name' => 'Druid', 'description' => 'Druid', 'rank' => '6', 'class_type' => '4', 'img_url' => 'cleric_f10' ],
            [ 'name' => 'Oracle', 'description' => 'Oracle', 'rank' => '6', 'class_type' => '4', 'img_url' => 'cleric_f11' ],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_db');
    }
}
