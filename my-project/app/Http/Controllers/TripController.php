<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity\MeansOfTransport;

class TripController extends Controller
{
    public function __Construct(){
        $this->middleware('JpJsonResponse');
    }
    
    function getMeansOfTransport(){
        $meansOfTransport = MeansOfTransport::all();

        return response()->json([
            'meansOfTransport' => $meansOfTransport,
            'HOGe'=>'hoge'
        ]);
    }
}
