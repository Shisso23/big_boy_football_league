<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'play_stage', 'play_date', 'results','decided_by','match_score','venue_id','referee_id','player_of_the_match',
    ];
}
