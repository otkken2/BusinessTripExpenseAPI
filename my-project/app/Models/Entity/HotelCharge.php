<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\HotelChargeEnum;

/**
 * App\Models\Entity\HotelCharge
 *
 * @property int $id
 * @property string $hotel_charge
 * @property int $trip_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HotelCharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelCharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelCharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelCharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelCharge whereHotelCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelCharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelCharge whereTripId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelCharge whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class HotelCharge extends Model
{
    public const KOU = 13000;
    public const OTSU = 11700;
    public const ACTUAL_HOTEL_CHARGE = "ActualHotelCharge";

    use HasFactory;
    public function trips(){
        return $this->belongsTo("App\Models\Entity\Trip");
    }
    public static function createNewRecord($tripDataFromRequest,Trip $trip){
        if(!array_key_exists("hotelChargeType",$tripDataFromRequest)){return;}
        if(!$tripDataFromRequest["hotelChargeType"]){return ;}

        $hotelCharge = new self;
        if($tripDataFromRequest["hotelChargeType"] == self::KOU){
            $hotelCharge->hotel_charge = (int)self::KOU;
        }
        elseif($tripDataFromRequest["hotelChargeType"] == self::OTSU){
            $hotelCharge->hotel_charge = (int)self::OTSU;
        }
        elseif($tripDataFromRequest["hotelChargeType"] == self::ACTUAL_HOTEL_CHARGE){
            $hotelCharge->hotel_charge = $tripDataFromRequest["actualHotelChargeValue"];
        }
        $hotelCharge->trip_id = $trip->id;
        $hotelCharge->save();
    }
}
