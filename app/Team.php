<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $appends = ['spent', 'players_count'];

    public function players()
    {
        return $this->hasMany(Player::class)->oldest('updated_at');
    }

    public function getPlayersCountAttribute()
    {
        return $this->players()->count();
    }

    public function getSpentAttribute()
    {
        return $this->players()->sum('points');
    }
}
