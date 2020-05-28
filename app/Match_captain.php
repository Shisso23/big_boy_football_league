<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match_captain extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_no', 'team_id', 'player_captain',
    ];
}
