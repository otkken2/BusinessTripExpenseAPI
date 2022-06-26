<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Entity{
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
 */
	class ActualHotelCharge extends \Eloquent {}
}

namespace App\Models\Entity{
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
 */
	class CateredBurdenAmount extends \Eloquent {}
}

namespace App\Models\Entity{
/**
 * App\Models\Entity\ExpenseClassification
 *
 * @property int $id
 * @property string $classification
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseClassification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseClassification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseClassification query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseClassification whereClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseClassification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseClassification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseClassification whereUpdatedAt($value)
 */
	class ExpenseClassification extends \Eloquent {}
}

namespace App\Models\Entity{
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
 */
	class HotelCharge extends \Eloquent {}
}

namespace App\Models\Entity{
/**
 * App\Models\Entity\LastdayOfTrip
 *
 * @method static \Illuminate\Database\Eloquent\Builder|LastdayOfTrip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LastdayOfTrip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LastdayOfTrip query()
 */
	class LastdayOfTrip extends \Eloquent {}
}

namespace App\Models\Entity{
/**
 * App\Models\Entity\MeansOfTransport
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MeansOfTransport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeansOfTransport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeansOfTransport query()
 * @method static \Illuminate\Database\Eloquent\Builder|MeansOfTransport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeansOfTransport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeansOfTransport whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeansOfTransport whereUpdatedAt($value)
 */
	class MeansOfTransport extends \Eloquent {}
}

namespace App\Models\Entity{
/**
 * App\Models\Entity\PlaceOfBusiness
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceOfBusiness newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceOfBusiness newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceOfBusiness query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceOfBusiness whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceOfBusiness whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceOfBusiness whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceOfBusiness whereUpdatedAt($value)
 */
	class PlaceOfBusiness extends \Eloquent {}
}

namespace App\Models\Entity{
/**
 * App\Models\Entity\Point
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Point newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Point newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Point query()
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereUpdatedAt($value)
 */
	class Point extends \Eloquent {}
}

namespace App\Models\Entity{
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
 */
	class PrivateCarDriveDistance extends \Eloquent {}
}

namespace App\Models\Entity{
/**
 * App\Models\Entity\Purpose
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Purpose newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purpose newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purpose query()
 * @method static \Illuminate\Database\Eloquent\Builder|Purpose whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purpose whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purpose whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purpose whereUpdatedAt($value)
 */
	class Purpose extends \Eloquent {}
}

namespace App\Models\Entity{
/**
 * App\Models\Entity\School
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|School newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|School newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|School query()
 * @method static \Illuminate\Database\Eloquent\Builder|School whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereUpdatedAt($value)
 */
	class School extends \Eloquent {}
}

namespace App\Models\Entity{
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
 */
	class ServiceSection extends \Eloquent {}
}

namespace App\Models\Entity{
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
 */
	class Trip extends \Eloquent {}
}

