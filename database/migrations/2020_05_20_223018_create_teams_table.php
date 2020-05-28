<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id('team_id');
            $table->foreignId('category_id')->references('category_id')->on('league_categories')->onDelete('cascade');
            $table->string('name');
            $table->unsignedInteger('matches_played');//how many matches a team played in group stage
            $table->unsignedInteger('won')->nullable();
            $table->unsignedInteger('draw')->nullable();
            $table->unsignedInteger('lost')->nullable();
            $table->unsignedInteger('goals_scored'); // how many goals scored
            $table->unsignedInteger('goals_conceded');// how many goals conceded
            $table->unsignedInteger('goal_diff');
            $table->unsignedInteger('points');
            $table->unsignedInteger('position');// which position are they on the table?
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
        Schema::dropIfExists('teams');
    }
}
