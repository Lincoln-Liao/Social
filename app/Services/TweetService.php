<?php

namespace App\Services;
use App\Repository\TweetRepository;

class TweetService {
    protected $Repository;

    public function __construct(TweetRepository $tweetRepository){
        $this->Repository = $tweetRepository;
    }

    public function create($data){
        return $this->Repository->create($data);
    }

}
