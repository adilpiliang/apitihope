<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Validator;

class UserController extends Controller
{
        public $successStatus = 200;
    
        public function login(){
            if(Auth::attempt(['npm_mhs' => request('npm_mhs'), 'password' => request('password')])){
                $user = Auth::user();
                $success['token'] =  $user->createToken('nApp')->accessToken;
                return response()->json(['success' => $success, 'user' => $user], $this->successStatus);
            }
            else{
                return response()->json(['error'=>'Anda tidak terdaftar!'], 401);
            }
        }
}
