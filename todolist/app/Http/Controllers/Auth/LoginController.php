<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login.index');
    }

    public function store(Request $request){
        $request->validate([
           'email'=>'required|string|email',
           'password'=>'required|string',
        ]);

        if (!Auth::attempt($request->only('email','password'))){
            return back()
                ->withErrors([
                    'email'=>'These credentials do not match records in DB'
                ]);
        };

        return redirect()->route('tasks');
    }

    public function destroy(Request $request){
        Auth::logout();

        return redirect()->route('welcome');
    }
}
