<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    public function comments()
    {
        return $this->hasMany(Apply::class);
    }
}
