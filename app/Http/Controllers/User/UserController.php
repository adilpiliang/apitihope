<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $successStatus = 200;

    public function login(){
        if(Auth::attempt(['npm' => request('npm'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('vote_api')->accessToken;
            return response()->json([
                'success' => true,
                'token'   => $success,
                'user'    => $user],200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Invalid npm or password', ],401);
        }
    }
}
