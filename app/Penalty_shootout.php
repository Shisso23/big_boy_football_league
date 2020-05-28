<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penalty_shootout extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_no', 'team_id', 'player_id','score_goal',
    ];
}
