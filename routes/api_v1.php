<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/me', 'me');
});

Route::resource('tweet',TweetController::class)->only([
    'store'
]);

Route::controller(UserController::class)->group(function () {
    Route::post('/user/follow', 'follow');
    Route::post('/user/favorite_tweet', 'favorite_tweet');
});
