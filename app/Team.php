<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $appends = ['spent'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('playersCount', function ($builder) {
            $builder->withCount('players');
        });
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function getSpentAttribute()
    {
        return $this->players->sum('points');
    }
}
