<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login() {
        return view('auth.login');
    }
    
    public function LoginStore(Request $request) {
        // dd($request->all());
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect('panel/dashboard');
        } else {
            return redirect()->back()->with('error', 'Please Enter your Correct Email and Password');
        }
    }
}
