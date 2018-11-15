<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'team_id', 'points'];
    protected $appends = ['color'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getColorAttribute()
    {
        $color = $this->team_id ? $this->team->color : '';

        return $color;
    }
}
