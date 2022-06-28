<?php

namespace App\Http\Controllers;

use App\Models\Entity\MeansOfTransport;
use App\Models\Entity\Point;
use App\Models\Entity\ServiceSection;
use Illuminate\Http\Request;

class ServiceSectionController extends Controller
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
        //
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
        $serviceSection = new ServiceSection();
        $serviceSection->means_of_transport_id = MeansOfTransport::where("name",$request["meansOfTransport"])->first()->id;
        $serviceSection->start_point_id = Point::where("name",$request["startPointName"])->first()->id;
        $serviceSection->end_point_id = Point::where("name",$request["endPointName"])->first()->id;
        $serviceSection->expense = $request["expense"];
        $serviceSection->one_way_or_round_trip = $request["oneWayOrRoundTrip"];
        $serviceSection->is_route_overlap = $request["isRouteOverLap"];
        $serviceSection->save();
        return response()->json([
            "message" => "serviceSection record created!"
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
