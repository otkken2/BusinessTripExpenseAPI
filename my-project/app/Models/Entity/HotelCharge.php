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
class HotelCharge extends Model
{
    use HasFactory;
}
