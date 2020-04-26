<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class UserFavoriteFood extends Model
{
    protected $fillable = [
        'user_id',
        'favorite_food_id',
    ];
}
