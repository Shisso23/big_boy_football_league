<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'name', 'matches_played','won','draw','lost','goals_scored','goals_conceded','goal_diff','points','position','photo',
    ];
}
