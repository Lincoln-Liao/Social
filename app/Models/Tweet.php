<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'content',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
