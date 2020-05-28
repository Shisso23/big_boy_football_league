<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_details', function (Blueprint $table) {
            $table->foreignId('match_no')->references('match_id')->on('matches')->onDelete('cascade');
            $table->string('play_stage')->nullable();
            $table->foreignId('team_id')->references('team_id')->on('teams')->onDelete('cascade');
            $table->string('win_lose');//W,L,D
            $table->string('decided_by');  //N for normal score or P for penalty shootout
            $table->unsignedInteger('goals_scored');//numof goals scored by the team
            $table->unsignedInteger('penalty_score')->nullable();//how many penalty goals did the team score?
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
        Schema::dropIfExists('match_details');
    }
}
