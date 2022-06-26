<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class Purpose extends Model
{
    use HasFactory;
}
