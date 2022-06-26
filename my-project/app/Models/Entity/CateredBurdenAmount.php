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
class CateredBurdenAmount extends Model
{
    use HasFactory;
}
