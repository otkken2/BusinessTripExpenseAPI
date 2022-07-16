<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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
    protected $guarded = ["id","created_at","updated_at"];
    private const MISCELLANEOUS_EXPENSE_UNIT_PRICE = 120;
    public function serviceSections(){
        $this->hasMany("App\Models\Entity\ServiceSection");
    }
    public function purpose(){
        $this->hasOne("App\Models\Entity\Purpose");
    }
    public function allTheWayType(){
        $this->hasOne(("App\Models\Entity\AllTheWayType"));
    }
    public function placeOfBusiness(){
        $this->hasOne("App\Models\Entity\PlaceOfBusiness");
    }
    public function lastDayOfTrip(){
        $this->hasOne("App\Models\Entity\LastdayOfTrip");
    }
    public function registPlaceOfBusinessId($tripDataFromRequest){
        $existingPlaceOfBusiness = PlaceOfBusiness::where("name",$tripDataFromRequest["placeOfBusiness"])->first();
        if($existingPlaceOfBusiness){
            $this->place_of_business_id = $existingPlaceOfBusiness->id;
        }else{
            $newPlaceOfBusiness = PlaceOfBusiness::createNewRecord($tripDataFromRequest);
            $this->place_of_business_id = $newPlaceOfBusiness->id;
        }
    }
    public function registPurposeId($tripDataFromRequest){
        $existingPurpose = Purpose::where("name",$tripDataFromRequest["purpose"])->first();
        if($existingPurpose){
            $this->purpose_id = $existingPurpose->id;
        }else{
            $newPurpose = Purpose::createNewRecord($tripDataFromRequest);
            $this->purpose_id = $newPurpose->id;
        }
    }

    // TODO tripに含まれる情報であるものの、nullableを避けるために別テーブルとしている項目については、追々対応する

    public function registAll(Request $request){
        $tripDataFromRequest = $request["trip"];
        $this->first_day = $tripDataFromRequest["firstDay"];
        $this->day_or_overnight = $tripDataFromRequest["dayOrOvernight"];
        $this->registPurposeId($tripDataFromRequest);
        $this->registPlaceOfBusinessId($tripDataFromRequest);
        // TODO ユーザーIDをregistする機能。この↓１行は仮。
        $this->user_id = random_int(1,20);
        $this->go_directly = $tripDataFromRequest["isCheckedGoDirectly"];
        $this->return_directly = $tripDataFromRequest["isCheckedReturnDirectly"];
        $this->miscellaneous_expense = $tripDataFromRequest["numberOfTripDays"] * self::MISCELLANEOUS_EXPENSE_UNIT_PRICE;
        $this->total_expense = $tripDataFromRequest["totalExpense"];
        $this->save();
        AllTheWayType::createNewRecord($tripDataFromRequest,$this);
        LastdayOfTrip::createNewRecord($tripDataFromRequest,$this);
        // 利用者が交通機関を利用していない（全行程徒歩などの）場合には以下のif文に入らない。
        if(!in_array(null,$tripDataFromRequest["serviceSections"][0])){
            foreach ($tripDataFromRequest["serviceSections"] as $serviceSectionDataFromRequest){
                ServiceSection::createNewRecord($serviceSectionDataFromRequest,$this);
            }
        }
        PrivateCarDriveDistance::createNewRecord($tripDataFromRequest,$this);
        HotelCharge::createNewRecord($tripDataFromRequest,$this);
    }
}

