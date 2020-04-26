<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'prefecture_id',
    ];

    public function prefecture()
    {
        return $this->belongsTo('App\Eloquents\Prefecture');
    }
}
