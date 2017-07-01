<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('role_name',255);
        });

        DB::table('role')->insert([
            [ 'role_name' => 'Guest' ],
            [ 'role_name' => 'User' ],
            [ 'role_name' => 'Donator' ],
            [ 'role_name' => 'Moderator'],
            [ 'role_name' => 'Adminstrator' ],
        ]);


        Schema::create('status', function (Blueprint $table) {
            $table->increments('status_id');
            $table->string('status_name_en',255);
            $table->string('status_name_th',255);
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('status');
        Schema::dropIfExists('role');
    }
}
