<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllTheWayType extends Model
{
    use HasFactory;
    protected $fillable = [0,"trip_id","all_the_way_type"];
    public function trip(){
        return $this->belongsTo("App\Models\Entity\Trip");
    }
    public static function createNewRecord($tripDataFromRequest,Trip $trip){
        if(!array_key_exists("allTheWayType",$tripDataFromRequest)){return;}
        if(!$tripDataFromRequest["allTheWayType"]){return;}
        $newRecord = new self();
        $newRecord->all_the_way_type = $tripDataFromRequest["allTheWayType"];
        $newRecord->trip_id = $trip->id;
        $newRecord->save();
    }
}
