<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function authenticate(LoginRequest $request){
        $data = $request->only('email','password');
        if(Auth::attempt($data)){
            return redirect()->intended('/');
        }
        else{
            return redirect()->intended('/login')->withErrors(['Email & Password is Invalid']);
        }
        // return $data;
    }
    public function logout(){
        Auth::logout();
        return redirect()->to('login');
    }
}
