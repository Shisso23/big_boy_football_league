<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal_detail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_no', 'team_id', 'player_id','goal_time','play_stage',
    ];
}
