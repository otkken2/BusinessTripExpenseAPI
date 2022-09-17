<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity\MeansOfTransport;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Log;

class MeansOfTransportController extends Controller
{
    public function __construct()
    {
        $this->middleware('JpJsonResponse');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meansOfTransport = MeansOfTransport::select(["id","name"])->get();
        Log::info($meansOfTransport);
        return response()->json(['meansOfTransport'=> $meansOfTransport]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existingMeansOfTransport = MeansOfTransport::where("name",$request["name"])->first();
        if($existingMeansOfTransport){
            return ;
        }
        $meansOfTransport = MeansOfTransport::create($request->all());
        return response()->json([
            "message" => "meansOfTransport record created!"
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
