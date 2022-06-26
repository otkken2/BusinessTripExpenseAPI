<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Entity\ServiceSection
 *
 * @property int $id
 * @property int $start_point_id
 * @property int $end_point_id
 * @property string $means_of_transport_id
 * @property int $expense
 * @property int $expense_classification_id
 * @property string $one_way_or_round_trip
 * @property int $is_route_overlap
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereEndPointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereExpense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereExpenseClassificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereIsRouteOverlap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereMeansOfTransportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereOneWayOrRoundTrip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereStartPointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceSection whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ServiceSection extends Model
{
    use HasFactory;
}
