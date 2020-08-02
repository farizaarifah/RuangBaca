<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    $redirectPath = '/';

    public function index() {
    	return view('auth.login');
    }

    public function auth(Request $req){
        $email = $req->email;
        $pwd   = $req->password;
        if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
            return "Hai ". Auth::user()->name;
        }else{
            return "Maaf email atau password yang anda masukan tidak sesuai.";
        }
    }
}
