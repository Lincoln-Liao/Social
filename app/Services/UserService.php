<?php

namespace App\Services;
use App\Repository\UserFollowRepository;
use App\Repository\UserRepository;

class UserService {
    protected $Repository;
    protected $UserFollowRepository;

    public function __construct(
        UserRepository $userRepository,
        UserFollowRepository $userFollowRepository
    ){
        $this->Repository = $userRepository;
        $this->UserFollowRepository = $userFollowRepository;
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

    public function follow($user_id,$follow_user_id){
        return $this->UserFollowRepository->creat(['user_id'=>$user_id,'follow_user_id'=>$follow_user_id
        ]);
    }

}
