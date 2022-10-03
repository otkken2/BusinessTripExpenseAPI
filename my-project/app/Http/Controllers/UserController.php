<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public static function getUser(Request $request){
        // Log::debug(Auth::user());
        Log::debug('$request->session()->all()');
        Log::debug($request->session()->all());
        // return \Auth::user();
        return $request->session()->all();
    }
}
