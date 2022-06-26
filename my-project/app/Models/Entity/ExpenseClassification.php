<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class ExpenseClassification extends Model
{
    use HasFactory;
}
