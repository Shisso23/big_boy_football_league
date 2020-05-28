<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id('player_id');
            $table->foreignId('team_id')->references('team_id')->on('teams')->onDelete('cascade');
            $table->unsignedInteger('jersey_no')->nullable();
            $table->string('name');
            $table->string('id_no');
            $table->unique('id_no');
            //$table->foreignId('position_id')->references('position_id')->on('playing_positions')->onDelete('cascade');//doubt
            $table->date('date_of_birth')->nullable();
            $table->unsignedInteger('age');
            $table->string('phone_no')->nullable();
            $table->unique('phone_no');
            $table->string('sex');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('players');
    }
}
