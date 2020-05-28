<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenaltyShootoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penalty_shootouts', function (Blueprint $table) {
            $table->id('kick_id');
            $table->foreignId('match_no')->references('match_id')->on('matches')->onDelete('cascade');
            $table->foreignId('team_id')->references('team_id')->on('teams')->onDelete('cascade');
            $table->foreignId('player_id')->references('player_id')->on('players')->onDelete('cascade');
            $table->string('score_goal'); //Y if it was scored ad N otherwise
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
        Schema::dropIfExists('penalty_shootouts');
    }
}
