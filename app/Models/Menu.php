<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'description',
        'Prix',
        'restaurant_id',
    ];

}
