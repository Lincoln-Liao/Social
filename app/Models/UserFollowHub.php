<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserFollowHub extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'follow_user_id',
    ];

}
