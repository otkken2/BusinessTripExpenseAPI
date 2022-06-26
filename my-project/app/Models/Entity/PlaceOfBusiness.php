<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class PlaceOfBusiness extends Model
{
    use HasFactory;
    protected $table="places_of_business";
    protected $fillable = ['name'];
}
