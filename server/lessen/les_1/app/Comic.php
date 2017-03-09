<?php

namespace IPMEDT5;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    public static function scopeIronman($query) {
        return $query->where('superheld', 'Ironman')->get();
    }
}
