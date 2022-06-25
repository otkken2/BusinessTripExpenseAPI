<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceOfBusiness extends Model
{
    use HasFactory;
    protected $table="places_of_business";
    protected $fillable = ['name'];
}
