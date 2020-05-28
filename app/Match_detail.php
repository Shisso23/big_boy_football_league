<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match_detail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_no', 'play_stage','team_id','win_lose','decided_by','goals_scored','penalty_score',
    ];
}
