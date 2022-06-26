<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Entity\PrivateCarDriveDistance
 *
 * @property int $id
 * @property float $distance
 * @property int $trip_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PrivateCarDriveDistance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivateCarDriveDistance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivateCarDriveDistance query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivateCarDriveDistance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivateCarDriveDistance whereDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivateCarDriveDistance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivateCarDriveDistance whereTripId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivateCarDriveDistance whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PrivateCarDriveDistance extends Model
{
    use HasFactory;
}
