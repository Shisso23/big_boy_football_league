<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id', 'jersey_no', 'name','id_no','position_to_play','date_of_birth','age','phone_no','sex','photo',
    ];
}
