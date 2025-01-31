<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class authcontroller extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    function loginPost(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        $credentials = $request->only("email", "password");
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("dashboard"));
        }
        return redirect(route("login"))->with("error", "login failed");
    }

    public function register()
    {
        return view('auth.register');
    }

    function registerPost(Request $request){
        $request->validate([
            "username" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()){
            return redirect(route("dashboard"))
            ->with("success", "User created successfully");
        }
        return redirect(route("register"))->with("error", "Faild to create");
    }

}
