<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{   
    protected $table = 'restaurants';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'city',
        'cuisine_type',
        'adress',
        'capacity',
        'openhours',
        'closehours',
        'users_id',
    ];

    public function images()
    {
        return $this->hasMany(Images::class);
    }
}
