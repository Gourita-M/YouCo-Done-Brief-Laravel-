<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    public function restaurants()
    {
        return $this->belongsTo(Restaurants::class);
    }
}
