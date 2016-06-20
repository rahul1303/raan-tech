<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    public function comment()
    {
        return $this->hasMany('App\Comments','hotel_id');
    }
}
