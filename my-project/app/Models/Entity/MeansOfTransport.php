<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class MeansOfTransport extends Model
{
    use HasFactory;
    protected $table = 'means_of_transport';
    protected $fillable = ["name"];
    public static function createNewRecord(string $name):self{
        $newRecord = new self();
        $newRecord->name = $name;
        $newRecord->save();
        return $newRecord;
    }
}
