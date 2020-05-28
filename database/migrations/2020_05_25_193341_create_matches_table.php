<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id('match_id');
            $table->string('play_stage');
            $table->date('play_date');
            $table->string('results')->nullable();  // win , draw
            $table->string('decided_by')->nullable();;
            $table->string('match_score'); //eg. 3-1, 0-0... //should be added automatically. not manually
            $table->foreignId('venue_id')->references('venue_id')->on('venues')->onDelete('cascade');
            $table->foreignId('referee_id')->references('referee_id')->on('referees')->onDelete('cascade');
            $table->foreignId('player_of_the_match')->references('player_id')->on('players')->onDelete('cascade');
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
        Schema::dropIfExists('matches');
    }
}
