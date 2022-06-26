<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Entity\ActualHotelCharge
 *
 * @property int $id
 * @property int $actual_hotel_charge
 * @property int $trip_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ActualHotelCharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActualHotelCharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActualHotelCharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|ActualHotelCharge whereActualHotelCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActualHotelCharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActualHotelCharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActualHotelCharge whereTripId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActualHotelCharge whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ActualHotelCharge extends Model
{
    use HasFactory;
}
