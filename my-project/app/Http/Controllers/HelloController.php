<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function Hello() {
        $message = 'Hello';
    
        return response()->json([
            'message' => $message
        ]);
    }

    function Hoge(){
        $json = 
            [
                'message' => 'Hoge!!!!',
                'user' => 'kenji Otaka',
                'hobby' => 'guitar'
            ];

        return response()->json($json);
    }
}
