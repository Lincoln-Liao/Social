<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserFavoriteTweetHub extends Pivot {
    protected $table = 'user_favorite_tweet_hubs';

}
