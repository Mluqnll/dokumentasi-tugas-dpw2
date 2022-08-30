<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class AuthController extends Controller
{

    public function login(){
        return View ('admin.login');
    }


    public function loginproses(){
        if (auth()->attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('shop');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('login');
    }

}
