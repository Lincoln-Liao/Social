<?php

namespace App\Repository;
use App\General\EntityOperations;
use App\Models\UserFollowHub;

class UserFollowRepository {
    use EntityOperations;

    public function __construct(UserFollowHub $userFollowHub) {
        $this->Entity = $userFollowHub;
    }

    public function creat($data){
        return UserFollowHub::create($data);
    }

}
