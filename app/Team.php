<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function getSpentAttribute()
    {
        return $this->players->sum('points');
    }
}
