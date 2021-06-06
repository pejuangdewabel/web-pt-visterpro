<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function postLogin(Request $request){        
        $email      = $request->email;
        $password   = $request->password;

        if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('dashboard-admin');
        }

        return redirect()->route('login');
    }

    public function logout(){
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            return redirect()->route('login');
        }
    }
}
