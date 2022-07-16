<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Entity\CateredBurdenAmount
 *
 * @property int $id
 * @property int $amount
 * @property string $amount_type
 * @property int $trip_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CateredBurdenAmount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CateredBurdenAmount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CateredBurdenAmount query()
 * @method static \Illuminate\Database\Eloquent\Builder|CateredBurdenAmount whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CateredBurdenAmount whereAmountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CateredBurdenAmount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CateredBurdenAmount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CateredBurdenAmount whereTripId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CateredBurdenAmount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
enum AmountType {
    case FullAmount;
    case Fare;
    case Other;
}
class CateredBurdenAmount extends Model
{
    use HasFactory;
    public const FULL_AMOUNT = "fullAmount";
    public const FARE = "fare";
    public const OTHER = "other";

    public static function createNewRecord($tripDataFromRequest,Trip $trip){
        if(!$tripDataFromRequest["burdenAmount"] == 0){return ;}
        $newRecord = new self;
        $newRecord->amount = $tripDataFromRequest["burdenAmount"];
        // TODO $newRecord->amount_type
        $newRecord->trip_id = $trip->id;
        $newRecord->save();
    }

}
