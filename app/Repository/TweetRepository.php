<?php

namespace App\Repository;
use App\General\EntityOperations;
use App\Models\Tweet;

class TweetRepository {
    use EntityOperations;

    public function __construct(Tweet $tweet){
        $this->Entity = $tweet;
    }

    public function create($data) {
        return Tweet::create($data);
    }

}
