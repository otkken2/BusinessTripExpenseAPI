<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Entity\Trip
 *
 * @property int $id
 * @property int $first_day
 * @property string $day_or_overnight
 * @property int $purpose_id
 * @property int $place_of_business_id
 * @property int $user_id
 * @property int $on_foot_all
 * @property int $go_directly
 * @property int $return_directly
 * @property int $use_of_public_car_all
 * @property int $use_of_private_car_all
 * @property int $miscellaneous_expense
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDayOrOvernight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereFirstDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereGoDirectly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereMiscellaneousExpense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereOnFootAll($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePlaceOfBusinessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip wherePurposeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereReturnDirectly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUseOfPrivateCarAll($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUseOfPublicCarAll($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUserId($value)
 * @mixin \Eloquent
 */
class Trip extends Model
{
    use HasFactory;
}
