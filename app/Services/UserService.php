<?php

namespace App\Services;
use App\Repository\UserRepository;

class UserService {
    protected $Repository;

    public function __construct(UserRepository $userRepository){
        $this->Repository = $userRepository;
    }

    public function create($data){
        return $this->Repository->create($data);
    }

    public function create_token($token){
        return $this->Repository->create_token($token);
    }

    public function get_user_by_email($email){
        return $this->Repository->strict_search('email', $email)->firstOrFail();
    }

}
