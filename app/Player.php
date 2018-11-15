<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getColorAttribute()
    {
        return $this->team_id ? $this->team->color : '';
    }
}
