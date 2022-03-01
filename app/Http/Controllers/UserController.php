<?php

namespace App\Http\Controllers;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller {
    protected $Service;

    public function __construct(UserService $userService){
        $this->Service = $userService;
    }

    public function follow(Request $request){
        $validatedData = $request->validate([
            'follow_user_id' => 'required|integer|exists:users,id'
        ]);
        $user = $request->user();

        $this->Service->follow($user->id,$request->input('follow_user_id'));
        return response()->json([
            'message' => 'success'
        ], 200);
    }

    public function favorite_tweet(Request $request){
        $validatedData = $request->validate([
            'tweet_id' => 'required|integer|exists:tweets,id'
        ]);
        $user = $request->user();

        $this->Service->favorite_tweet($user->id,$request->input('tweet_id'));
        return response()->json([
            'message' => 'success'
        ], 200);
    }

}
