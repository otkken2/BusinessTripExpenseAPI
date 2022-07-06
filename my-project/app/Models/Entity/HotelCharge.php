<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
enum HotelChargeEnum: string{
    case Kou = "13000";
    case Otsu = "11700";
    case ActualHotelCharge = "ActualHotelCharge";
}
class HotelCharge extends Model
{
    use HasFactory;
    public function trips(){
        return $this->belongsTo("App\Models\Entity\Trip");
    }
    public static function createNewRecord($tripDataFromRequest,Trip $trip){
        if(!$tripDataFromRequest["hotelChargeType"]){return ;}

        $hotelCharge = new self;
        if($tripDataFromRequest["hotelChargeType"] == HotelChargeEnum::Kou->value){
            $hotelCharge->hotel_charge = (int)HotelChargeEnum::Kou->value;
        }
        elseif($tripDataFromRequest["hotelChargeType"] == HotelChargeEnum::Otsu->value){
            $hotelCharge->hotel_charge = (int)HotelChargeEnum::Otsu->value;
        }
        elseif($tripDataFromRequest["hotelChargeType"] == HotelChargeEnum::ActualHotelCharge->value){
            $hotelCharge->hotel_charge = $tripDataFromRequest["actualHotelChargeValue"];
        }
        $hotelCharge->trip_id = $trip->id;
        $hotelCharge->save();
    }
}
