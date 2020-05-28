<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playing_position extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position_description',
    ];
}
