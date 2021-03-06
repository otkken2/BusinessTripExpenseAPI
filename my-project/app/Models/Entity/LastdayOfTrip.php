<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Entity\LastdayOfTrip
 *
 * @method static \Illuminate\Database\Eloquent\Builder|LastdayOfTrip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LastdayOfTrip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LastdayOfTrip query()
 * @mixin \Eloquent
 */
class LastdayOfTrip extends Model
{
    use HasFactory;
    protected $table = "last_days_of_trips";
    public function trip(){
        $this->belongsTo("App\Models\Entity\Trip");
    }
    public static function createNewRecord($tripDataFromRequest,Trip $trip){
        if(!array_key_exists("lastDay",$tripDataFromRequest)){return;}
        if(!$tripDataFromRequest["lastDay"]){return;}
        $newRecord = new self();
        $newRecord->last_day = $tripDataFromRequest["lastDay"];
        $newRecord->trip_id = $trip->id;
        $newRecord->save();
    }
}
