<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goal_details', function (Blueprint $table) {
            $table->id('goal_id');
            $table->foreignId('match_no')->references('match_id')->on('matches')->onDelete('cascade');
            $table->foreignId('team_id')->references('team_id')->on('teams')->onDelete('cascade');
            $table->foreignId('player_id')->references('player_id')->on('players')->onDelete('cascade');
            $table->unsignedInteger('goal_time');  // at what time of the game was the goal scored?
            $table->string('play_stage')->nullable();  //eg. quater finel, final...
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
        Schema::dropIfExists('goal_details');
    }
}
