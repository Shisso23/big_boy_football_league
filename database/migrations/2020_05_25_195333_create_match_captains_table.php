<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchCaptainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_captains', function (Blueprint $table) {
            $table->foreignId('match_no')->references('match_id')->on('matches');
            $table->foreignId('team_id')->references('team_id')->on('teams');
            $table->foreignId('player_captain')->references('player_id')->on('players');
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
        Schema::dropIfExists('match_captains');
    }
}
