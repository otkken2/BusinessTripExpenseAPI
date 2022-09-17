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
    public static function isExistRequestData($tripDataFromRequest):bool{
        return (!(
            in_array(NULL,array_column($tripDataFromRequest["serviceSections"],"meansOfTransport"))
            &&
            in_array(NULL,array_column($tripDataFromRequest["serviceSections"],"startPoint"))
            &&
            in_array(NULL,array_column($tripDataFromRequest["serviceSections"],"endPoint"))
        ));
    }

    public function registMeansOfTransportId($request){
        $existingMeansOfTransport = MeansOfTransport::where("name",$request["meansOfTransport"])->first();
        if($existingMeansOfTransport){
            $this->means_of_transport_id = $existingMeansOfTransport->id;
            return;
        }
        $newMeansOfTransport = MeansOfTransport::createNewRecord($request["meansOfTransport"]);
        $this->means_of_transport_id = $newMeansOfTransport->id;
    }

    public function registStartPointId($request){
        $existingStartPoint = Point::where("name",$request["startPoint"])->first();
        if($existingStartPoint){
            $this->start_point_id = $existingStartPoint->id;
        }
        else{
            $newStartPoint = Point::createNewRecord($request["startPoint"]);
            $this->start_point_id = $newStartPoint->id;
        }
    }

    public function registerEndPointId($request){
        $existingEndPoint = Point::where("name",$request["endPoint"])->first();
        if($existingEndPoint){
            $this->end_point_id = $existingEndPoint->id;
        }
        else{
            $newEndPoint = Point::createNewRecord($request["endPoint"]);
            $this->end_point_id = $newEndPoint->id;
        }
    }

    public function registExpense($request){
        $this->expense = $request["serviceSectionExpense"];
    }
    public function registOnewWayOrRoundTrip($request){
        $this->one_way_or_round_trip = $request["oneWayOrRoundTrip"];
    }
    public function registIsRouteOverlap($request){
        $this->is_route_overlap = $request["isRouteOverLap"] ? 1:0;
    }

    public function registAll($request,Trip $trip){
        $this->registMeansOfTransportId($request);
        $this->registStartPointId($request);
        $this->registerEndPointId($request);
        $this->registExpense($request);
        $this->registOnewWayOrRoundTrip($request);
        $this->registIsRouteOverlap($request);
        $this->trip_id = $trip->id;
        $this->save();
    }

    public static function createNewRecord($serviceSectionDataFromRequest,Trip $trip){
        $newRecord = new self();
        $newRecord->registAll($serviceSectionDataFromRequest,$trip);
    }
}
