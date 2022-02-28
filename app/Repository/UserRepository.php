<?php

namespace App\Repository;
use App\General\EntityOperations;
use App\Models\User;

class UserRepository {
    use EntityOperations;

    public function __construct(User $user) {
        $this->Entity = $user;
    }

    public function create($data) {
        return User::create($data);
    }

    public function create_token($token){
        return $this->Entity->createToken($token)->plainTextToken;
    }

}
