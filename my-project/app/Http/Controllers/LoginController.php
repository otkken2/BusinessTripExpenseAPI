<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        // Log::debug($request);
        $credentials = $request->validate([
                'email' => ['required'],
                'password' => ['required'],
        ]);


        // logger("hoge",$credentials);
        // logger()->emergency("全然わからない！");

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $request->session()->put('user', $credentials);
            return response()->json(Auth::user());
        }
        // Log::debug(response()->json([],401));
        return response()->json([],401);
    }
}
