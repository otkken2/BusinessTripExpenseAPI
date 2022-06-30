<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Entity\MeansOfTransport;
use App\Models\Entity\Point;


/**
 * App\Models\Entity\ServiceSection
 *
 * @property int $id
 * @property int $start_point_id
 * @property int $end_point_id
 * @property string $means_of_transport_id
 * @property int $expense
 * @property int $expense_classification_id
 * @property string $one_way_or_round_trip
 * @property int $is_route_overlap
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereEndPointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereExpense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereExpenseClassificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereIsRouteOverlap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereMeansOfTransportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereOneWayOrRoundTrip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereStartPointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ServiceSection extends Model
{
    use HasFactory;
    public function trip(){
        return $this->belongsTo("App\Models\Entity\Trip");
    }
    public function meansOfTransport(){
        return $this->hasOne("App\Models\Entity\MeansOfTransport");
    }

    public function points(){
        return $this->hasMany("App\Models\Entity\Point");
    }

    public function registMeansOfTransportId(Request $request){
        $existingMeansOfTransport = MeansOfTransport::where("name",$request["meansOfTransport"])->first();
        if($existingMeansOfTransport){
            $this->means_of_transport_id = $existingMeansOfTransport->id;
        }
        else{
            $meansOfTransport = new MeansOfTransport();
            $meansOfTransport->name = $request["meansOfTransport"];
            $meansOfTransport->save();
            $this->means_of_transport_id = $meansOfTransport->id;
        }
    }

    public function registStartPointId(Request $request){
        $existingStartPoint = Point::where("name",$request["startPointName"])->first();
        if($existingStartPoint){
            $this->start_point_id = $existingStartPoint->id;
        }
        else{
            $startPoint = new Point();
            $startPoint->name = $request["startPointName"];
            $startPoint->save();
            $this->start_point_id = $startPoint->id;
        }
    }

    public function registerEndPointId(Request $request){
        $existingEndPoint = Point::where("name",$request["endPointName"])->first();
        if($existingEndPoint){
            $this->end_point_id = $existingEndPoint->id;
        }
        else{
            $endPoint = new Point();
            $endPoint->name = $request["endPointName"];
            $endPoint->save();
            $this->end_point_id = $endPoint->id;
        }
    }

    public function registExpense(Request $request){
        $this->expense = $request["expense"];
    }
    public function registOnewWayOrRoundTrip(Request $request){
        $this->one_way_or_round_trip = $request["oneWayOrRoundTrip"];
    }
    public function registIsRouteOverlap(Request $request){
        $this->is_route_overlap = $request["isRouteOverLap"];
    }

    public function registAll(Request $request){
        $this->registMeansOfTransportId($request);
        $this->registStartPointId($request);
        $this->registerEndPointId($request);
        $this->registExpense($request);
        $this->registOnewWayOrRoundTrip($request);
        $this->registIsRouteOverlap($request);
        $this->save();
    }
}
